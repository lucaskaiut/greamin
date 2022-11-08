import React from 'react';
import route from 'ziggy-js';
import MenuItem from './MenuItem';

export default function Sidebar(props) {
    let currentUrl = route().current();

    console.log(currentUrl);

    return (
        <div className="min-h-[calc(100vh-96px)] w-80 bg-white flex flex-col items-center gap-2 py-5">
            <MenuItem label="Dashboard" active={currentUrl == 'dashboard'} url="dashboard"/>
            <MenuItem label="Pedidos" active={currentUrl == 'orders.index'} url="orders"/>
            <MenuItem label="Produtos" active={currentUrl == 'products.index'} url="products"/>
            <MenuItem label="Clientes" active={currentUrl == 'customers.index'} url="customers"/>
        </div>
    )
}