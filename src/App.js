import { FormDate } from "./FormDate";
import { meetings } from "./data.js";
function App() {
  return (
    <div className="App">
      <FormDate data={meetings}/>
    </div>
  );
}

export default App;
