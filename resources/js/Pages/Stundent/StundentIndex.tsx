import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { PageProps } from '@/types';
import Modal from '@/Components/Modal';
import { useState } from 'react';
import PrimaryButton from '@/Components/PrimaryButton';
import NewStundent from '@/Pages/Stundent/NewStundent';

export default function StundentIndex({ auth }: PageProps) {
	const [confirmingUserDeletion, setConfirmingUserDeletion] = useState(false);

	const confirmUserDeletion = () => {
		setConfirmingUserDeletion(true);
	};

	const closeModal = () => {
		setConfirmingUserDeletion(false);
	};

	return (
		<AuthenticatedLayout
			user={auth.user}
			header={
				<div className='flex flex-row'>
					<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-2 justify-center">
						Alunos
					</h2>
					<PrimaryButton onClick={confirmUserDeletion}>Novo</PrimaryButton>
				</div>
			}
		>
			<Head title="Alunos" />

			<div className="py-12">
				<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
						<div className="p-6 text-gray-900 dark:text-gray-100">
							Alunos!
						</div>
					</div>
				</div>
			</div>

			<Modal show={confirmingUserDeletion} onClose={closeModal}>
				<NewStundent />
			</Modal>

		</AuthenticatedLayout>
	);
}
