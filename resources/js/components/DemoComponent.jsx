import React from "react";
import { createRoot } from "react-dom/client";

export default function DemoComponent() {
    return (
        <>
            <h1>Welcome to React with Vite!</h1>
            <p>
                To get started, edit{" "}
                <code>resources/js/registerReactComponents.js</code> and save to
                reload.
            </p>
        </>
    );
}

if (document.getElementById("app")) {
    const root = createRoot(document.getElementById("app"));
    root.render(<DemoComponent />);
}
