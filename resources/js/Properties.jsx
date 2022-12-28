import React, { useEffect, useState } from "react";
import { createRoot } from "react-dom/client";
import Card from "./Components/Content/Properties/Card";
import Modal from "./Components/Content/Properties/Modal";
import TopFilter from "./Components/Content/Properties/Topbar";
import Layout from "./Components/Layout";
import BaseUrl from "./Utils/BaseUrl";

export default function Properies() {
    const [properies, setProperties] = useState([]);
    const [loadding, setLoadding] = useState(false);
    const [isError, setIsError] = useState(false);
    const [error, setError] = useState("");
    const [page, setPage] = useState([]);

    // @SERVER side Rendering
    const getPeoperties = async () => {
        setLoadding(true);
        try {
            const { data } = await BaseUrl.get("/properties");
            // console.log(data)
            setProperties(data);
        } catch (err) {
            setError(err);
            // console.log(error);
        }
        setLoadding(false);
    };

    // * Handelling Effect
    useEffect(() => {
        getPeoperties();
    }, []);

    // Start Content
    let content;
    content = loadding && <p className="text-xl bg-primary">Loadding...</p>;
    content = isError && error.length > 0 && (
        <p className="text-danger">{error}</p>
    );
    content =
        !loadding &&
        !isError &&
        properies.length > 0 &&
        properies.map((property) => {
            return <Card key={property.id} property={property} />;
        });

    return (
        <>
            <Layout>
                <TopFilter />
                <div class="row">                    
                        {content}
                </div>
            </Layout>
            <Modal />
        </>
    );
}

if (document.getElementById("property")) {
    createRoot(document.getElementById("property")).render(<Properies />);
}
