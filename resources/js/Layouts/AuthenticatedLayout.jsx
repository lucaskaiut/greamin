import React, { useState } from 'react';
import { Link } from '@inertiajs/inertia-react';
import Header from '@/Components/Header';
import Sidebar from '@/Components/Sidebar';

export default function Authenticated({ auth, header, children }) {
    return (
        <div className="bg-grey-500">
            <Header user={auth.user}/>
            <div className="flex">
                <Sidebar />
                {children}
            </div>
        </div>
    );
}
