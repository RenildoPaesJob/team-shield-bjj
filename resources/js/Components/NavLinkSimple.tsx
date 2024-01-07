import { InertiaLinkProps, Link } from "@inertiajs/react";
import { AnchorHTMLAttributes } from "react";

interface NavLinkProps {
	href: string;
	children: string | AnchorHTMLAttributes<HTMLAnchorElement>;
	className?: string;
	title?: string
}

export default function NavLinkSimple({ href, children, className, title }: InertiaLinkProps & NavLinkProps) {
	return (
		<Link
			type='button'
			className={`mr-2 inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150` + className}
			href={href}
			title={title}
		>
			{children}
		</Link>
	)
}