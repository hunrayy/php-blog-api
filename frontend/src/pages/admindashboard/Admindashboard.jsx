import React, { useState } from 'react';
import Sidebar from '../../components/sidebar/Sidebar';
import "./admindashboard.css"

function Admindashboard() {
    return(
        <div className='bg-success'>
            <header style={{display: "flex", alignItems: "center"}}>
                <Sidebar />
                <div style={{display: "flex", justifyContent: "center", width: "100%", color: "white"}}>
                    <p className="fst-italic" style={{fontSize: "50px"}}>Naijaoversabi</p>
                </div>
            </header>
            <div className='details-wrapper text-white'>
                <div style={{display: "flex", flexDirection: "column", paddingBottom: "20px"}}>
                    <span style={{fontSize: "25px", fontFamily: "cursive"}}>Welcome back! &#128075;</span>
                    <span style={{color: "rgba(255, 255, 255, 0.774)"}}>Good evening</span>
                </div>
                
                <div className='graphic-cover'>
                    <div className='details-cover'>
                        <img className='welcome-image' src=".././src/images/welcomeImage.png" alt="welcome image" />
                        
                        <div>
                            <h5>Henry Okiyi</h5>
                            <h6 style={{color: "rgba(255, 255, 255, 0.774)"}}>Writer/Author</h6>
                        </div>
                        <div style={{display: "flex", gap: "20px"}}>
                            <div>
                                <span style={{fontWeight: "900", fontSize: "20px"}}>32</span>&nbsp;
                                <span style={{color: "rgba(255, 255, 255, 0.774)"}}>posts</span>
                            </div>
                            <div>
                                <span style={{fontWeight: "900", fontSize: "20px"}}>64</span>&nbsp;
                                <span style={{color: "rgba(255, 255, 255, 0.774)"}}>comments</span>
                            </div>
                        </div>
                    </div>
                    {/* <div className='hover-animation' style={{position: "relative", width: "200px", height: "200px", borderRadius: "10px", padding: "0 0 20px 20px", display: "flex", flexDirection: "column", justifyContent: "flex-end"}}>
                        <img width="100px" height="100px" style={{position: "absolute", top: "-20%", left: "0"}}  src=".././src/images/book.png" alt="book image" />
                        <span>Total posts</span>
                        <span>154</span>
                    </div>
                    <div className='hover-animation' style={{position: "relative", width: "200px", height: "200px", borderRadius: "10px", padding: "0 0 20px 20px", display: "flex", flexDirection: "column", justifyContent: "flex-end"}}>
                        <img width="150px" height="150px" style={{position: "absolute", top: "-30%", left: "-10%"}}  src=".././src/images/comments.png" alt="book image" />
                        <span>Comments</span>
                        <span>96</span>
                    </div> */}
                </div>
            </div>

         


            

        </div>
    )
}

export default Admindashboard;