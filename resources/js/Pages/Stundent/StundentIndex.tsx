import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import TableStundents from '@/Components/TableStundents';

import 'react-toastify/dist/ReactToastify.css';
import NavLinkSimple from '@/Components/NavLinkSimple';

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

	// if (stundent_name) {
	// 	Toast(stundent_name, 'top-center', 'success')
	// }

	return (
		<AuthenticatedLayout
			user={auth.user}
			header={
				<div className='flex flex-row align-middle'>
					<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mr-3 justify-center mt-2">
						Alunos
					</h2>
					<NavLinkSimple
						href={route('stundent.create')}
						children='Novo'
						className='p-2 bg-cyan-300 rounded-md hover:bg-cyan-300 hover:text-black transition ease-in-out delay-150 duration-300'
					/>
				</div>
			}
		>
			<Head title="Alunos" />

			{/* {stundent_name ? ToastNotify(`${stundent_name}`) : ''} */}

			{stundents.length > 0 &&
				<TableStundents array={stundents} />
			}

		</AuthenticatedLayout>
	);
}
