import React from 'react';

export default function Header(props) {
    const { user } = props;

    return (
        <div className="w-full h-24 bg-brand-900 flex items-center justify-end p-12">
            <div className="text-white">
                <p>{ user.name } </p>
            </div>
            <div className="rounded-full overflow-hidden h-20 w-20 ml-4">
                <img src={ user.avatar ?? "https://via.placeholder.com/80" }/>
            </div>
        </div>
    );
}