import { Link } from '@inertiajs/react'
import React from 'react'

export default function Home({ warehouses }) {
    console.log(warehouses);
    return (
        <div className='m-4'>
            <h2 className='text-4xl font-bold text-center'>Warehouses</h2>
            <div className="flex gap-3 flex-wrap">
                {
                    warehouses.map(warehouse => (
                        <div key={warehouse.id} className='bg-white shadow rounded w-[30%] h-auto cursor-pointer'>
                            <Link href={`parking-slots/${warehouse.id}`}>
                                <div className="p-3">
                                    <div className='bg-gray-300 rounded gray h-20 w-full mb-3'>

                                    </div>
                                    <h2 className='text-lg'>{warehouse.name}</h2>
                                    <h5>{warehouse.occupied}/{warehouse.capacity}</h5>
                                </div>
                            </Link>

                        </div>

                    ))
                }
            </div>
        </div >
    )
}
