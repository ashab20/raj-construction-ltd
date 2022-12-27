import React from "react";
import { createRoot } from "react-dom/client";
import Header from "./Components/Header";
import Layout from "./Components/Layout";

export default function Properies() {
    return (
        <Layout>
            Hello
        </Layout>
    );
}

if (document.getElementById("property")) {
    createRoot(document.getElementById("property")).render(<Properies />);
}
