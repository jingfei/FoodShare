package com.jingfei_and_her_happy_friends.foodshareapp;

import android.app.Activity;
import android.net.Uri;
import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;


/**
 * A simple {@link Fragment} subclass.
 * Activities that contain this fragment must implement the
 * {@link Comment.OnFragmentInteractionListener} interface
 * to handle interaction events.
 * Use the {@link Comment#newInstance} factory method to
 * create an instance of this fragment.
 */
public class Comment extends Fragment {
    /*
    WebView webView;

        View rootView = inflater.inflate(R.layout.fragment_food_list, container, false);

        TextView changeToMap;
        changeToMap = (TextView)rootView.findViewById(R.id.changeToMap);
        changeToMap.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
                FoodMap nextFrag= new FoodMap();
                FoodList.this.getFragmentManager().beginTransaction()
                        .replace(R.id.container, nextFrag)
                        .addToBackStack(null)
                        .commit();
            }
        });

        webView = (WebView)rootView.findViewById(R.id.webView);
        // 開啟執行JavaScript功能
        webView.getSettings().setJavaScriptEnabled(true);
        webView.setWebChromeClient(new WebChromeClient());
        webView.loadUrl("http://10.10.164.72/food/list.php");

        return rootView;
    } */
}
