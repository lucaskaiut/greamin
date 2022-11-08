import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function OrderList(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
        >
            <h1>Pedidos</h1>
        </AuthenticatedLayout>
    );
}
