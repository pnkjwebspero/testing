import { useEffect, useState, useContext } from "react";
//Context Api
import AuthContext from "../Store/auth.context.jsx";

export default function Button() {
    const authContext = useContext(AuthContext);

    const restoresession = async () => {
        await authContext.restoreSession();
    };

    useEffect(() => {
        restoresession();
    }, [authContext.isLogin]);

    const login = async() => {
        try {
            if (!authContext?.auth?.actor) {
                const login = await authContext.login();
            }
        } catch (error) {
            console.warn("error", error);
        }
    }

    const logout = async () => {
        if (authContext?.auth?.actor) {
            await authContext.logout();
        }
    };
    return (
        <>
            <button onClick={() => {
                authContext?.auth?.actor ? logout() : login()
            }}>
                {authContext?.auth?.actor
                    ? "Log out"
                    : "Log Into Wallet"}
            </button>
        </>
    )
}