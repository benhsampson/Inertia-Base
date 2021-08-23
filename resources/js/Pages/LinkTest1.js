import React from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-react";

export default function LinkTest1() {
    return (
        <>
            <Link href="/link-test-2">Link</Link>
            <button onClick={() => {
                Inertia.visit("/link-test-2");
            }}>Redirect</button>
        </>
    );
}
