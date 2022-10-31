// Generated by view binder compiler. Do not edit!
package com.egsystembd.MymensinghHelpline.databinding;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.RelativeLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.viewbinding.ViewBinding;
import androidx.viewbinding.ViewBindings;
import com.egsystembd.MymensinghHelpline.R;
import java.lang.NullPointerException;
import java.lang.Override;
import java.lang.String;

public final class ActivitySplashBinding implements ViewBinding {
  @NonNull
  private final RelativeLayout rootView;

  @NonNull
  public final ImageView ivMap;

  @NonNull
  public final TextView tv1;

  @NonNull
  public final TextView tv2;

  private ActivitySplashBinding(@NonNull RelativeLayout rootView, @NonNull ImageView ivMap,
      @NonNull TextView tv1, @NonNull TextView tv2) {
    this.rootView = rootView;
    this.ivMap = ivMap;
    this.tv1 = tv1;
    this.tv2 = tv2;
  }

  @Override
  @NonNull
  public RelativeLayout getRoot() {
    return rootView;
  }

  @NonNull
  public static ActivitySplashBinding inflate(@NonNull LayoutInflater inflater) {
    return inflate(inflater, null, false);
  }

  @NonNull
  public static ActivitySplashBinding inflate(@NonNull LayoutInflater inflater,
      @Nullable ViewGroup parent, boolean attachToParent) {
    View root = inflater.inflate(R.layout.activity_splash, parent, false);
    if (attachToParent) {
      parent.addView(root);
    }
    return bind(root);
  }

  @NonNull
  public static ActivitySplashBinding bind(@NonNull View rootView) {
    // The body of this method is generated in a way you would not otherwise write.
    // This is done to optimize the compiled bytecode for size and performance.
    int id;
    missingId: {
      id = R.id.iv_map;
      ImageView ivMap = ViewBindings.findChildViewById(rootView, id);
      if (ivMap == null) {
        break missingId;
      }

      id = R.id.tv1;
      TextView tv1 = ViewBindings.findChildViewById(rootView, id);
      if (tv1 == null) {
        break missingId;
      }

      id = R.id.tv2;
      TextView tv2 = ViewBindings.findChildViewById(rootView, id);
      if (tv2 == null) {
        break missingId;
      }

      return new ActivitySplashBinding((RelativeLayout) rootView, ivMap, tv1, tv2);
    }
    String missingId = rootView.getResources().getResourceName(id);
    throw new NullPointerException("Missing required view with ID: ".concat(missingId));
  }
}