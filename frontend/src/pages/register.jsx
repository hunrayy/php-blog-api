

import { Link } from "react-router-dom"
const register = () => {
    return<div className="bg-success" style={{height: "100vh"}}>
    <div className="container">
        <div className="col-md-4  mx-auto">
            <div style={{display: "flex", justifyContent: "center", alignItems: "center", flexDirection: "column", height: "80vh"}}>
                {/* <div className="d-flex justify-content-center"><div>Naijaoversabi</div></div> */}
                <form className="form card px-4 py-3 bg-success text-white mt-5" style={{width: "100%", borderColor: "white"}}>
                    <h3>Register</h3>
                    <div className="mt-3">
                        <div></div>
                        <div></div>
                    </div>
                    <div className="form-group mt-4">
                        <label>Firstname:</label>
                        <input type="text" placeholder="enter firstname"className="form-control" />
                        <div className="text-danger"></div>
                    </div>

                    <div className="form-group pt-2">
                        <label>Lastname:</label>
                        <input type="text" placeholder="enter lastname" className="form-control" />
                        <div className="text-danger"></div>
                    </div>

                    <div className="form-group pt-2">
                        <label>Email:</label>
                        <input type="email" placeholder="enter email" className="form-control" />
                        <div className="text-danger"></div>
                    </div>

                    <div className="form-group pt-2">
                        <label>Password:</label>
                        <input type="password" placeholder="enter password" className="form-control" />
                        <div className="text-danger"></div>
                    </div>

                    <div className="form-group">
                        <button className="btn btn-primary btn-block mt-4">Create account</button>
                    </div>

                    <hr />
                    <h6>Already registered? <Link className="text-decoration-none">Login</Link></h6>

                </form>

            </div>
        </div>

    </div>
    <h1 className="animation">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br />
        Alias, molestiae sint. Illo ad impedit minima eligendi, dolores iste 
        corporis vitae alias reprehenderit adipisci!
    </h1>

    
    
    </div>
}
export default register