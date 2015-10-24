package com.jingfei_and_her_happy_friends.foodshareapp;

import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

/**
 * A simple {@link Fragment} subclass.
 * Activities that contain this fragment must implement the
 * {@link Version.OnFragmentInteractionListener} interface
 * to handle interaction events.
 * Use the {@link Version#newInstance} factory method to
 * create an instance of this fragment.
 */
public class Version extends Fragment {
    public Version(){}

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View rootView = inflater.inflate(R.layout.fragment_version, container, false);

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

        return rootView;
    }
}
