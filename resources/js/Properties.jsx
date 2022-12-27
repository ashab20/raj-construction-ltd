
import React from 'react';
import { createRoot } from 'react-dom/client';
import {BrowserRouter as Router,Routes,Route} from "react-router-dom"
import Header from './Components/Header';
import Layout from './Components/Layout';
import Main from './Components/Main';

export default function Properies(){
    return(
        <div>Properies</div>
    );
}

if(document.getElementById('property')){
    createRoot(document.getElementById('property')).render(<Properies />)
}