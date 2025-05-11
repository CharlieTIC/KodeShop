import axios from 'axios'
import React, {useState}from 'react'
import { Navigate, useNavigate } from 'react-router-dom'
import NavigationButtons from "./NavigationButtons"


const endpoint = 'http://localhost:8000/api/producto'

const CreateProducto = () => {

    const [nombre, setNombre] = useState('')
    const [descripcion, setDescripcion] = useState('')
    const [categoria, setCategoria] = useState('')
    const [precio, setPrecio] = useState(0)
    const [stock, setStock] = useState(0)
    const [img, setImg] = useState('')
    const navigate = useNavigate()



    const store = async (e) => {
        e.preventDefault()
        axios.post(endpoint, {nombre:nombre, descripcion:descripcion, categoria:categoria, precio:precio, stock:stock, img:img})
        Navigate('/')

    }


  return (
    <div>
        <h3>Crear Producto</h3>
        <form onSubmit={store}>
            <div className='mb-3'>
                <label className='form-label'>Nombre</label>
                <input
                    value={nombre}
                    onChange={ (e)=> setNombre(e.target.value)}
                    type='text'
                    className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Descripcion</label>
                <input
                    value={descripcion}
                    onChange={ (e)=> setDescripcion(e.target.value)}
                    type='text'
                    className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Categoria</label>
                <input
                    value={categoria}
                    onChange={ (e)=> setCategoria(e.target.value)}
                    type='text'
                    className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Precio</label>
                <input
                    value={precio}
                    onChange={ (e)=> setPrecio(e.target.value)}
                    type='number'
                    className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Stock</label>
                <input
                    value={stock}
                    onChange={ (e)=> setStock(e.target.value)}
                    type='number'
                    className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Imagen</label>
                <input
                    value={img}
                    onChange={ (e)=> setImg((e.target.value))}
                    type='text'
                    className='form-control'
                />
            </div>
            <button type='submit' className='btn btn-primary'>Guardar</button>
        </form>
        <NavigationButtons showCreate={false} />
    </div>
  )
}

export default CreateProducto
