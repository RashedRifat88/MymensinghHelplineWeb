package com.egsystembd.MymensinghHelpline;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.content.pm.PackageInfo;
import android.content.pm.PackageManager;
import android.graphics.drawable.ColorDrawable;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;
import android.os.Handler;
import android.os.Looper;
import android.provider.Settings;
import android.text.Html;
import android.util.Log;
import android.view.View;
import android.view.animation.AnimationUtils;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import com.afollestad.materialdialogs.MaterialDialog;

import io.reactivex.android.schedulers.AndroidSchedulers;
import io.reactivex.schedulers.Schedulers;

public class SplashActivity extends AppCompatActivity {

    private ImageView iv_map;
    private TextView tv1, tv2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);


        String current_version = "";

        PackageManager pm = getApplicationContext().getPackageManager();
        String pkgName = getApplicationContext().getPackageName();
        PackageInfo pkgInfo = null;
        try {
            pkgInfo = pm.getPackageInfo(pkgName, 0);
        } catch (PackageManager.NameNotFoundException e) {
            e.printStackTrace();
        }
        current_version = pkgInfo.versionName;

//        Log.d("tag111333", " current_version: " + current_version);


        initStatusBar();
        initView();

        loadAnimations();

        Thread timer = new Thread() {
            @Override
            public void run() {

                try {
                    sleep(2500);
                    Intent intent = new Intent(SplashActivity.this, MainActivity.class);
                    startActivity(intent);
                    finish();
                    super.run();
                } catch (InterruptedException e) {
                    e.printStackTrace();

                }

            }
        };
        timer.start();



    }

    private void initStatusBar() {
        View decor = getWindow().getDecorView();
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.M) {
            getWindow().setStatusBarColor(getResources().getColor(R.color.gradient3, this.getTheme()));
//            decor.setSystemUiVisibility(View.SYSTEM_UI_FLAG_LIGHT_STATUS_BAR);
            decor.setSystemUiVisibility(decor.getSystemUiVisibility() & ~View.SYSTEM_UI_FLAG_LIGHT_STATUS_BAR); //set status text  light

        } else if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.LOLLIPOP) {
            getWindow().setStatusBarColor(getResources().getColor(R.color.gradient3));
//            decor.setSystemUiVisibility(View.SYSTEM_UI_FLAG_LIGHT_STATUS_BAR);
            decor.setSystemUiVisibility(decor.getSystemUiVisibility() & ~View.SYSTEM_UI_FLAG_LIGHT_STATUS_BAR); //set status text  light
        }
    }

    private void initView() {
        iv_map = findViewById(R.id.iv_map);
        tv1 = findViewById(R.id.tv1);
        tv2 = findViewById(R.id.tv2);
    }


    private void loadAnimations() {
        iv_map.startAnimation(AnimationUtils.loadAnimation(this, R.anim.ttb));
        tv1.startAnimation(AnimationUtils.loadAnimation(this, R.anim.stb));
        tv2.startAnimation(AnimationUtils.loadAnimation(this, R.anim.btt1));
    }



//    private void checkInternetConnection() {
//        boolean isInternet = NetworkCheck.isConnect(this);
//
//        if (!isInternet) {
//            boolean wrapInScrollView = true;
//            MaterialDialog dialog = new MaterialDialog.Builder(SplashActivity.this)
////                    .title(getResources().getString(R.string.no_internet_text_title))
//                    .customView(R.layout.material_dialog_no_internet_view, wrapInScrollView)
////                    .content(getResources().getString(R.string.no_internet_text_body))
//                    .build();
//
//            Button btn_try_again = dialog.getCustomView().findViewById(R.id.btn_try_again);
//
//            btn_try_again.setOnClickListener(new View.OnClickListener() {
//                @Override
//                public void onClick(View view) {
//                    checkInternetConnection();
//                    dialog.dismiss();
//                }
//            });
//
//            dialog.show();
//
//            dialog.setCancelable(false);
//            dialog.setCanceledOnTouchOutside(false);
//
//        }
//
//    }


}
