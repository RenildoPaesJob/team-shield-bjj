import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { PageProps } from '@/types';
import NavLinkSimple from '@/Components/NavLinkSimple';
import { Payments } from '@/types/payment';
import ListPayment from "@/Pages/Payment/ListPayment";

export default function Payment({ auth, payments }: PageProps<{ payments: Payments[] }>) {
	return (
		<AuthenticatedLayout
			user={auth.user}
			header={
				<div className='flex flex-row'>
					<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mr-3 justify-center mt-2">Mesalidades</h2>
					<NavLinkSimple
						href={route('payment.create')}
						children='Novo'
						className='p-2 rounded-md hover:bg-cyan-500 hover:text-black transition ease-in-out delay-150 duration-300'
					/>
				</div>
			}
		>
			<Head title="Mesalidade" />

			<ListPayment array={payments} />
		</AuthenticatedLayout>
	);
}