package com.jingfei_and_her_happy_friends.foodshareapp;

import android.app.Activity;
import android.content.Intent;
import android.os.CountDownTimer;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.LinearLayout;
import android.widget.TextView;


public class HomePage extends Activity {
    TextView findFood_btn, shareFood_btn;
    LinearLayout bg;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home_page);

        findFood_btn = (TextView) findViewById(R.id.findFood_btn);
        shareFood_btn = (TextView) findViewById(R.id.shareFood_btn);
        bg = (LinearLayout) findViewById(R.id.bg);

        CountDownTimer timer = new CountDownTimer(3000, 10) {
            @Override
            public void onFinish() {
                findFood_btn.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        Intent it = new Intent(HomePage.this, MainActivity.class);
                        it.putExtra("choice", 1);
                        startActivity(it);
                    }
                });
                shareFood_btn.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        // TODO Auto-generated method stub
                        Intent it = new Intent(HomePage.this, MainActivity.class);
                        it.putExtra("choice", 2);
                        startActivity(it);
                    }
                });
            }
            @Override
            public void onTick(long millisLeft) {
                if(millisLeft < 2500) {
                    findFood_btn.setAlpha(1 - (float) millisLeft / 3000);
                    shareFood_btn.setAlpha(1 - (float) millisLeft / 3000);
                    bg.setAlpha(1 - (float) millisLeft / 3000);}
            }
        }.start();
    }
}
