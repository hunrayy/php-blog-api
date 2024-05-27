import React, { useState } from 'react';
import Sidebar from '../components/sidebar/Sidebar';

function Admindashboard() {
    return(
        <div class="bg-success  ">
            <header style={{display: "flex", alignItems: "center"}}>
                <Sidebar />
                <div style={{display: "flex", justifyContent: "center", width: "100%", color: "white"}}>
                    <p className="fst-italic" style={{fontSize: "50px"}}>Naijaoversabi</p>
                </div>
            </header>
            <div style={{color: "white"}}>
                <div style={{width: "300px", height: "200px", position: "relative", boxShadow: "2px 2px 2px 2px black"}}>
                    <h3>Henry Okiyi</h3>
                    <h4>Writer/Author</h4>
                    <img style={{position: "absolute", top: "-30%", right: "-40%"}} width="200px" height="200px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6pKx8A1h-PfBLdbUBiMBlFa63CahXx40pQA&s" alt="welcome image" />
                </div>
            </div>
            

        </div>
    )
}

export default Admindashboard;