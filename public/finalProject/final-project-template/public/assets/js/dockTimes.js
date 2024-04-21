/*<script src="https://unpkg.com/@supabase/supabase-js"></script>

const { createClient } =  supabase
supabase = createClient("https://yzimmbofcvyfirspzdqw.supabase.co", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Inl6aW1tYm9mY3Z5Zmlyc3B6ZHF3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTM2Mzc3NjQsImV4cCI6MjAyOTIxMzc2NH0.34rXLJXTLIwjq9AYweVbbAELK8SOsxZ_kXuXr1bmbKo")

    import {useEffect, useState} from 'react'

import DockCard from "./dockCard";

const Home = () => {
    const [fetchError, setFetchError] = useState(null)
    const [times, setSmoothies] = useState(null)

    useEffect(() => {
        const fetchDocktimes = async () => {
            const {data, error} = await supabase
                .from('dockTimes')
                .select()

            if (error) {
                setFetchError('Could not fetch the dock times')
                setSmoothies(null)
            }
            if (data) {
                setSmoothies(data)
                setFetchError(null)
            }
        }

        fetchDocktimes()

    }, [])

    return (
        <div className="page home">
            {fetchError && (<p>{fetchError}</p>)}
            {times && (
                <div className="times">
                    <div className="time-grid">
                        {times.map(time => (
                            <dockCard key={time.id} smoothie={time}/>
                        ))}
                    </div>
                </div>
            )}
        </div>
    )
}

*/