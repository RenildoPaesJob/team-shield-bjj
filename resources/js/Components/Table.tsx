import DataTable from 'react-data-table-component';

interface TableProps{
	array: []
}

export default function Table({array}: TableProps){
	const columns = [
		{
			name: 'Nome',
			selector: (row: { name: string; }) => row.name,
		},
		{
			name: 'Data de Nascimento',
			selector: (row: { date_birth: Date; }) => row.date_birth,
		},
		{
			name: 'Último Pagamento',
			selector: (row: { name: string; }) => row.name,
		},
		{
			name: 'Ações',
			selector: (row: { name: string; }) => row.name,
		},
	];

	const data = array

	return (
    <DataTable
      columns={columns}
      data={data}
			className='table table-responsive bg-gray-400 text-2xl '
    />
  );
}