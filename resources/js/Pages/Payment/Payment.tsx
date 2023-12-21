import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { PageProps } from '@/types';

export default function Payment({ auth, payments }: PageProps) {
	return (
		<AuthenticatedLayout
			user={auth.user}
			header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mr-3 justify-center mt-2">Payment</h2>}
		>
			<Head title="Payment" />

			<div className="py-4">
				<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
						<div className="p-6 text-gray-900 dark:text-gray-100 ">
							<div className="p-6 text-gray-900 dark:text-gray-100">Payment</div>
						</div>
					</div>
				</div>
			</div>
		</AuthenticatedLayout>
	);
}