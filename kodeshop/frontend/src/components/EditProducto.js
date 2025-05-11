import axios from "axios"
import React, {useState, useEffect} from "react"
import { useNavigate, useParams } from "react-router-dom"
import NavigationButtons from "./NavigationButtons"


const endpoint = 'http://localhost:8000/api/producto/'


const EditProducto = () => {

    const [nombre, setNombre] = useState('')
    const [descripcion, setDescripcion] = useState('')
    const [categoria, setCategoria] = useState('')
    const [precio, setPrecio] = useState(0)
    const [stock, setStock] = useState(0)
    const navigate = useNavigate()
    const [img, setImg] = useState('')
    const {id} = useParams()

    const update = async (e) => {
        e.preventDefault()
        await axios.put(`${endpoint}${id}`, {
            nombre:nombre,
            descripcion:descripcion,
            categoria:categoria,
            precio:precio,
            stock:stock,
            img:img
        })
        navigate("/")

    }

    useEffect(() => {
        const getProductoById = async () => {
            const response = await axios.get(`${endpoint}${id}`)
            setNombre(response.data.nombre)
            setDescripcion(response.data.descripcion)
            setCategoria(response.data.categoria)
            setPrecio(response.data.precio)
            setStock(response.data.stock)
            setImg(response.data.img)
        }
        getProductoById()
    }, [])

    return (
        <div>
        <h3>Modificar Producto</h3>
        <form onSubmit={update}>
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
                    onChange={ (e)=> setPrecio(Number(e.target.value))}
                    type='number'
                    className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Stock</label>
                <input
                    value={stock}
                    onChange={ (e)=> setStock(Number(e.target.value))}
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
            <button type='submit' className='btn btn-primary'>Guardar Modificación</button>
        </form>
        <NavigationButtons showCreate={false} />
    </div>
    
    )

}

export default EditProducto