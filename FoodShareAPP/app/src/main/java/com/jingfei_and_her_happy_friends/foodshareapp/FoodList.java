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


/**
 * A simple {@link Fragment} subclass.
 * Activities that contain this fragment must implement the
 * {@link FoodList.OnFragmentInteractionListener} interface
 * to handle interaction events.
 * Use the {@link FoodList#newInstance} factory method to
 * create an instance of this fragment.
 */
public class FoodList extends Fragment {
    public FoodList(){}

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        WebView webView;

        View rootView = inflater.inflate(R.layout.fragment_food_list, container, false);

       /* login_btn = (TextView)rootView.findViewById(R.id.login_btn);
        login_btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
                SearchFood nextFrag= new SearchFood();
                Login.this.getFragmentManager().beginTransaction()
                        .replace(R.id.container, nextFrag)
                        .addToBackStack(null)
                        .commit();
            }
        });*/

        webView = (WebView)rootView.findViewById(R.id.webView);
        // 開啟執行JavaScript功能
        webView.getSettings().setJavaScriptEnabled(true);
        webView.setWebChromeClient(new WebChromeClient());
        webView.loadUrl("http://10.10.164.72/food/list.php");

        return rootView;
    }
}
