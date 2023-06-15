import ReactDOM from "react-dom/client"
import Button from "./Components/button";
import { AuthContextProvider } from "./Store/auth.context.jsx";

ReactDOM.createRoot(document.getElementById("root")).render(
    <div  className={'proton'}>
        <AuthContextProvider>
            <Button/>
        </AuthContextProvider>
    </div>
);