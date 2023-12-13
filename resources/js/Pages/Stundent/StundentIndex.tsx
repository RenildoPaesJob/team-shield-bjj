import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { PageProps } from '@/types';
import Modal from '@/Components/Modal';
import { useState } from 'react';
import PrimaryButton from '@/Components/PrimaryButton';
import NewStundent from '@/Pages/Stundent/NewStundent';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import Table from '@/Components/Table';

interface User {
	id: number;
	name: string;
	email: string;
	email_verified_at: string;
}
interface StundentProps {
	auth: { user: User; }
	stundent_name?: string
	stundents?: any
}

export default function StundentIndex({ auth, stundent_name, stundents }: StundentProps) {
	const [confirmingUserDeletion, setConfirmingUserDeletion] = useState(false);

	// if (stundent_name) {
	// 	Toast(stundent_name, 'top-center', 'success')
	// }

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
					<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mr-3 justify-center mt-1">
						Alunos
					</h2>
					<PrimaryButton onClick={confirmUserDeletion}>Novo</PrimaryButton>
				</div>
			}
		>
			<Head title="Alunos" />

			{/* {stundent_name ? ToastNotify(`${stundent_name}`) : ''} */}

			<div className="py-12">
				<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
						<div className="p-6 text-gray-900 dark:text-gray-100">
							Alunos!
						</div>
					</div>
				</div>
			</div>

			{stundents &&
				<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
						<div className="p-6 text-gray-900 dark:text-gray-100 flex flex-col">
							<Table
								array={stundents}
							/>
						</div>
					</div>
				</div>
			}

			<Modal show={confirmingUserDeletion} onClose={closeModal}>
				<div className='text-end justify-end'>
					<button className='mr-8 py-4 text-white rounded-md' type='button' onClick={closeModal}>X</button>
				</div>
				<NewStundent />
			</Modal>

		</AuthenticatedLayout>
	);
}
