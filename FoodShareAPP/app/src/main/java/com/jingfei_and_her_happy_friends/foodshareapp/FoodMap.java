package com.jingfei_and_her_happy_friends.foodshareapp;

import android.app.Activity;
import android.net.Uri;
import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.webkit.WebChromeClient;
import android.webkit.WebView;
import android.widget.CompoundButton;
import android.widget.Switch;
import android.widget.TextView;


/*
 * A simple {@link Fragment} subclass.
 * Activities that contain this fragment must implement the
 * {@link FoodMap.OnFragmentInteractionListener} interface
 * to handle interaction events.
 * Use the {@link FoodMap#newInstance} factory method to
 * create an instance of this fragment.
 */
public class FoodMap extends Fragment {
    Switch toList;
    public FoodMap(){}

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        WebView webView;
        View rootView = inflater.inflate(R.layout.fragment_food_map, container, false);

        toList = (Switch) rootView.findViewById(R.id.switch1);
        toList.setOnCheckedChangeListener(new CompoundButton.OnCheckedChangeListener() {
            //和checkbox監聽動作一樣setOncheckedChangListener
            @Override
            public void onCheckedChanged(CompoundButton buttonView,
                                         boolean isChecked) {
                // TODO Auto-generated method stub
                FoodList nextFrag = new FoodList();
                FoodMap.this.getFragmentManager().beginTransaction()
                        .replace(R.id.container, nextFrag)
                        .addToBackStack(null)
                        .commit();
            }
        });
        webView = (WebView)rootView.findViewById(R.id.webView);
        // 開啟執行JavaScript功能
        webView.getSettings().setJavaScriptEnabled(true);
        webView.setWebChromeClient(new WebChromeClient());
        webView.loadUrl(Global.IP+"map.php");

        return rootView;
    }
}
