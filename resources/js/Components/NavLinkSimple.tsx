import { InertiaLinkProps } from "@inertiajs/react";
import { AnchorHTMLAttributes } from "react";

interface NavLinkProps {
	href: string;
	children: string | AnchorHTMLAttributes<HTMLAnchorElement>;
	className?: string;
	title?: string
}

export default function NavLinkSimple({ href, children, className, title }: InertiaLinkProps & NavLinkProps) {
	return (
		<a
			type='button'
			className={className}
			href={href}
			title={title}
		>
			{children}
		</a>
	)
}