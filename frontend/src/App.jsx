import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { Routes, Route } from 'react-router-dom'
import Home from './pages/home'
import Register from './pages/register'
import Admindashboard from './pages/Admindashboard'
function App() {
  return(
    <div>
      <Routes>
        <Route path='/' element={<Home />} />
        <Route path='/register' element={<Register />} />
        <Route path='/dashboard' element={<Admindashboard />} />
      </Routes>
    </div>
  )


  
}

export default App
