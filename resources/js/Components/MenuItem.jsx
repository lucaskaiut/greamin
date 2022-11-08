import React from 'react';
import classNames from 'classnames';
import { Link } from '@inertiajs/inertia-react';

export default function MenuItem(props) {
    return (
        <div className={classNames("w-60 rounded-md p-2 flex items-center justify-center cursor-pointer hover:bg-purple-900 hover:text-white transition-all", {
            'bg-purple-900': props.active,
            'text-white': props.active
        })}>
            <Link href={props.url}>
            <p>{ props.label }</p>
            </Link>
        </div>
    );
}