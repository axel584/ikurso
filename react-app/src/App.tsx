import { Routes, Route, Navigate } from 'react-router-dom'
import AuthGuard from './components/AuthGuard'
import Layout from './components/Layout'
import KursojPage from './pages/KursojPage'
import LecionojPage from './pages/LecionojPage'
import LecionerojPage from './pages/LecionerojPage'
import EkzercojPage from './pages/EkzercojPage'
import EkzerceroiPage from './pages/EkzerceroiPage'

export default function App() {
  return (
    <AuthGuard>
      <Layout>
        <Routes>
          <Route path="/" element={<KursojPage />} />
          <Route path="/kursoj/:kodo/lecionoj" element={<LecionojPage />} />
          <Route
            path="/kursoj/:kodo/lecionoj/:id/lecioneroj"
            element={<LecionerojPage />}
          />
          <Route
            path="/kursoj/:kodo/lecionoj/:id/lecioneroj/:lid/ekzercoj"
            element={<EkzercojPage />}
          />
          <Route
            path="/kursoj/:kodo/lecionoj/:id/lecioneroj/:lid/ekzercoj/:eid/ekzerceroj"
            element={<EkzerceroiPage />}
          />
          <Route path="*" element={<Navigate to="/" replace />} />
        </Routes>
      </Layout>
    </AuthGuard>
  )
}
