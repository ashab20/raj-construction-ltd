import React, { useEffect, useState } from "react";
import { createRoot } from "react-dom/client";
import Card from "./Components/Content/Properties/Card";
import Modal from "./Components/Content/Properties/Modal";
import TopFilter from "./Components/Content/Properties/Topbar";
import Layout from "./Components/Layout";
import BaseUrl from "./Utils/BaseUrl";

export default function Properies() {
    const [properies, setProperties] = useState([]);

    // @SERVER side Rendering
    const getPeoperties = async () => {
        try {
            const { data } = await BaseUrl.get("/properties");
            console.log(data);
        } catch (error) {
            console.log(error);
        }
    };

    // * Handelling Effect
    useEffect(() => {
        getPeoperties();
    }, []);

    // Start Content

    const content = ``;

    return (
        <>
            <Layout>
                <TopFilter />
                <div class="row">
                    <div class="col-md-6 col-xxl-3">
                        <Card />
                    </div>
                </div>
            </Layout>
            <Modal />
        </>
    );
}

if (document.getElementById("property")) {
    createRoot(document.getElementById("property")).render(<Properies />);
}
