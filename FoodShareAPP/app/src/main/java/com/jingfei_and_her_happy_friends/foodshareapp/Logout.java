package com.jingfei_and_her_happy_friends.foodshareapp;

import android.app.Activity;
import android.content.res.TypedArray;
import android.net.Uri;
import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.jingfei_and_her_happy_friends.foodshareapp.navgation.NavDrawerItem;


/**
 * A simple {@link Fragment} subclass.
 * Activities that contain this fragment must implement the
 * {@link Logout.OnFragmentInteractionListener} interface
 * to handle interaction events.
 * Use the {@link Logout#newInstance} factory method to
 * create an instance of this fragment.
 */
public class Logout extends Fragment {
    private String[] navMenuTitles;
    private TypedArray navMenuIcons;
    public Logout(){}

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View rootView = inflater.inflate(R.layout.fragment_logout, container, false);

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

        FoodMap nextFrag= new FoodMap();
        Logout.this.getFragmentManager().beginTransaction()
                .replace(R.id.container, nextFrag)
                .addToBackStack(null)
                .commit();

        Global.status=0;
        // load slide menu items
        navMenuTitles = getResources().getStringArray(R.array.nav_drawer_items);
        // nav drawer icons from resources
        navMenuIcons = getResources().obtainTypedArray(R.array.nav_drawer_icons);
        MainActivity.navDrawerItems.set(3, new NavDrawerItem(navMenuTitles[3], navMenuIcons.getResourceId(3, -1)));
        // Recycle the typed array
        navMenuIcons.recycle();return rootView;
    }
}
