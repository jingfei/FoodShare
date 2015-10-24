package com.jingfei_and_her_happy_friends.foodshareapp;

import android.app.Activity;
import android.content.res.TypedArray;
import android.net.Uri;
import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import com.jingfei_and_her_happy_friends.foodshareapp.navgation.NavDrawerItem;


/**
 * A simple {@link Fragment} subclass.
 * Activities that contain this fragment must implement the
 * {@link Login.OnFragmentInteractionListener} interface
 * to handle interaction events.
 * Use the {@link Login#newInstance} factory method to
 * create an instance of this fragment.
 */
public class Login extends Fragment {
    TextView login_btn;
    private String[] navMenuTitles;
    private TypedArray navMenuIcons;
    public Login(){}

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View rootView = inflater.inflate(R.layout.fragment_login, container, false);

        login_btn = (TextView)rootView.findViewById(R.id.login_btn);
        login_btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
                FoodShare nextFrag= new FoodShare();
                Login.this.getFragmentManager().beginTransaction()
                        .replace(R.id.container, nextFrag)
                        .addToBackStack(null)
                        .commit();
            }
        });
        Global.status=1;
        // load slide menu items
        navMenuTitles = getResources().getStringArray(R.array.nav_drawer_items);
        // nav drawer icons from resources
        navMenuIcons = getResources().obtainTypedArray(R.array.nav_drawer_icons);
        MainActivity.navDrawerItems.set(3, new NavDrawerItem(navMenuTitles[4], navMenuIcons.getResourceId(4, -1)));
        // Recycle the typed array
        navMenuIcons.recycle();

        return rootView;
    }

}
