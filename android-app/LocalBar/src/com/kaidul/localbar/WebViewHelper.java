package com.kaidul.localbar;

import android.annotation.SuppressLint;
import android.app.ProgressDialog;
import android.content.Context;
import android.graphics.Bitmap;
import android.webkit.WebChromeClient;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.webkit.WebSettings.RenderPriority;
import android.widget.Toast;

public class WebViewHelper {

    private ProgressDialog mProgressDialog;

    @SuppressLint("SetJavaScriptEnabled")
	public WebView webview(final Context mContext) {

        mProgressDialog = new ProgressDialog(mContext);

        WebView web = new WebView(mContext);

        WebSettings webSettings = web.getSettings();

        webSettings.setSavePassword(false);
        webSettings.setSaveFormData(false);
        webSettings.setAppCacheEnabled(false);

        webSettings.setJavaScriptEnabled(true);
        webSettings.setSupportZoom(true);
        webSettings.setAllowFileAccess(true);
        webSettings.setLoadWithOverviewMode(true);
        webSettings.setUseWideViewPort(true);

        webSettings.setCacheMode(WebSettings.LOAD_NO_CACHE);
        webSettings.setRenderPriority(RenderPriority.HIGH);

        web.setWebChromeClient(new WebChromeClient() {
            public void onProgressChanged(WebView view, int progress) {
                mProgressDialog.setMessage("Loading... " + progress + "%");
            }
        });

        web.setWebViewClient(new WebViewClient() {

            public void onReceivedError(WebView view, int errorCode,
                    String description, String failingUrl) {

                Toast.makeText(mContext, description + ".", Toast.LENGTH_SHORT)
                        .show();

            }

            public void onPageFinished(WebView view, String url) {
                mProgressDialog.dismiss();
            }

            @Override
            public void onPageStarted(WebView view, String url, Bitmap favicon) {
                super.onPageStarted(view, url, favicon);

                mProgressDialog.setCancelable(false);
                mProgressDialog.setMessage("Loading...");
                mProgressDialog.show();

            }

        });
        return web;
    }
}