
import React from 'react';
import { createRoot } from 'react-dom/client'
import Header from './Components/Header';

export default function App(){
    return(
        <Header/>
    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<App />)
}