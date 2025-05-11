import logo from './logo.svg';
import './App.css';

import { BrowserRouter, Route, Routes } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';

import Layout from "./components/Layout/Layout";


//Importamos nuestro componente MostrarProductos
import ReadProductos from './components/ReadProductos';
import CreateProducto from './components/CreateProducto';
import EditProducto from './components/EditProducto';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Layout />}>
            <Route path='/' element={<ReadProductos />} />
            <Route path='/create' element={<CreateProducto />} />
            <Route path='/edit/:id' element={<EditProducto />} />
          </Route>
        </Routes>
      </BrowserRouter>
      
    </div>
  );
}

export default App;
