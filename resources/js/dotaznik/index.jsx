import React from 'react';
import ReactDOM from 'react-dom/client';
import Questionaire from "./Questionaire.jsx";

const root = ReactDOM.createRoot(document.getElementById('dotaznik-root'));
root.render(
    <React.StrictMode>
        <Questionaire/>
    </React.StrictMode>
);
