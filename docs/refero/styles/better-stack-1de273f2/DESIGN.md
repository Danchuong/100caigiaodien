# Better Stack — Refero Style

- Refero URL: https://styles.refero.design/style/1de273f2-166f-4526-8442-16cc39fc7fd5
- Site URL: https://betterstack.com
- ID: 1de273f2-166f-4526-8442-16cc39fc7fd5
- Theme: dark
- Industry: devtools
- Created: 2026-04-30T00:58:12.242Z
- Ranks: newest: 653, popular: 823, trending: 733

> Deep space console

## Description

Better Stack employs a 'deep space console' aesthetic, built on a dark, near-black canvas layered with subtly differentiated dark gray surfaces. Typography is compact and precise, maintaining excellent contrast. A single vivid violet hue provides functional accents for interactive elements and brand highlights, creating moments of focus within the muted interface. Components are lightweight with large border radii, suggesting touch-friendly forms on a data-dense, technical interface.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Abyss | #0f101a | neutral | Primary page background, base surface for links, darkest tone in the UI |
| Graphite Panel | #151621 | neutral | Default button background, card backgrounds, and slightly elevated surfaces |
| Steel Overlay | #1f2433 | neutral | Input borders, card borders, and subtle separating lines |
| Faded Steel | #262935 | neutral | Outlined button borders, secondary dividers |
| Muted Ash | #646e87 | neutral | Faded secondary text, ghost button text, decorative icons |
| Ash Text | #939db8 | neutral | Primary text color for body copy, interactive states for text elements, and default borders |
| Cloud Whisper | #c9d3ee | neutral | Navigation text, crisp text in low-contrast areas, button hover states, icon strokes |
| Pure White | #ffffff | neutral | Headline text, high-contrast text elements, input text; Subtle background texture or element fill for cards or graphic elements |
| Zero Black | #000000 | neutral | Icon fills in certain contexts, part of shadow definitions |
| Focus Violet | #98a4f7 | brand | Brand accent color for links, borders of interactive elements, and key highlights. Creates visual attention against the dark neutrals |
| Blue Violet Gradient | #5b63d3 | accent | Decorative gradient for headers or significant visual elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica Now Text | Inter | 400, 500, 700 | 10px, 12px, 13px, 14px, 16px, 20px, 28px, 36px | 1.00, 1.08, 1.17, 1.20, 1.45, 1.50, 1.55, 1.60, 1.85 | Versatile text font used for body copy, navigation, buttons, and most UI elements. Its compact metrics and varied weights provide clarity and efficiency in a data-rich environment. |
| Helvetica Now Display | Inter | 500, 700 | 40px, 53px | 1.08, 1.10 | Used for prominent page headlines and key visual statements. Its display-specific optimizations enhance readability and visual impact at larger sizes, maintaining a precise, engineering-like aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 |  |
| body | 14 | 1.5 |  |
| body-lg | 16 | 1.6 |  |
| subheading | 20 | 1.55 | -0.2 |
| heading | 28 | 1.17 | -0.28 |
| heading-lg | 36 | 1.2 | -0.36 |
| display | 53 | 1.08 | -0.53 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "inputs": "10px",
    "buttons": "9999px",
    "dialogs": "16px",
    "general": "10px"
  },
  "elementGap": "20px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": "1320px"
}
```

## Components

### Primary Filled Button

**Role:** Button

Filled button for primary actions. Background: Graphite Panel (#151621), Text: Ash Text (#939db8). Padding: 12px vertical, 24px horizontal. Border radius: 9999px. No shadow.

### Ghost Button

**Role:** Button

Ghost button for secondary actions. Background: transparent. Text: Muted Ash (#646e87). Padding: 8px vertical, 6px horizontal. No border or radius defined, implies square edges unless contextually inherited.

### Small Pill Button

**Role:** Button

Small, rounded ghost button with transparent background, Cloud Whisper (#c9d3ee) text, and a 10px border radius. Padding: 0px vertical, 24px horizontal. No shadow.

### Accent Outlined Button

**Role:** Button

Outlined button often used for accent links or calls to action. Background: transparent. Border: 1px solid Focus Violet (#98a4f7). Text: Focus Violet (#98a4f7). Padding: 12px vertical, 24px horizontal. Border radius: 9999px.

### Informative Card

**Role:** Card

Standard content card. Background: Graphite Panel (#151621). Border radius: 16px. Padding: 20px on all sides. No shadow.

### Input Field

**Role:** Input

Input field with a subtle dark background and white text. Background: rgba(0.594223, 0.00140271, -0.0566696, 0.1) which is near-black with 10% opacity. Border: 1px solid Steel Overlay (#1f2433). Text: Pure White (#ffffff). Border radius: 12px. Padding: 0px vertical, 20px horizontal.

## Do's

- Maintain a clear visual hierarchy by layering neutral background colors: Midnight Abyss (#0f101a) for base, Graphite Panel (#151621) for cards, and Steel Overlay (#1f2433) for borders.
- Use Focus Violet (#98a4f7) sparingly and strategically for brand accents, links, and active states to guide user attention within the dark UI.
- Adopt the rounded, pill-shaped '9999px' border radius for all actionable buttons to ensure a consistent, friendly form.
- Apply Helvetica Now Text font with a -0.01em letter-spacing consistently across all body and UI elements for a compact, technical feel.
- Center-align primary headlines and section titles, especially in full-width hero sections, to create a strong focal point.
- Utilize a base spacing unit of 4px to maintain consistent density and alignment across all components and layouts.
- Implement the linear blue-violet gradient (linear-gradient(353deg, rgb(91, 99, 211) 17.51%, rgb(124, 135, 247) 183.08%)) only for major decorative elements like hero backgrounds or section separators to prevent visual noise.

## Don'ts

- Avoid using saturated chromatic colors other than Focus Violet (#98a4f7) unless those colors are explicitly for semantic status indicators.
- Do not introduce strong drop shadows; rely on subtle inset shadows (rgba(255, 255, 255, 0.25) 0px 1px 3px 0px inset) or border differences for elevation.
- Do not deviate from the established type scale; maintain the precise letter-spacing and line heights for a consistent typographic rhythm.
- Do not use sharp 0px border radii on interactive elements or cards; the system prioritizes soft, rounded shapes.
- Avoid large, impactful photos or illustrations that break the product's dark, UI-focused aesthetic; prioritize product screenshots and abstract visuals.
- Do not use generic, default blue link colors; ensure all links are styled with Focus Violet (#98a4f7) or Cloud Whisper (#c9d3ee) for consistent branding.
- Refrain from using complex, multi-color decorative gradients casually; reserve them for impactful moments where their presence enhances, not distracts.

## Layout

The page maintains a max-width of 1320px, with content consistently centered. The hero section is full-bleed with a dark background, featuring a prominent, centered headline and a call to action immediately below. Subsequent sections typically follow a 2-column or text-left/image-right alternating pattern. Vertical rhythm is established by consistent section gaps, with elements frequently grouped into cards that receive 20px of padding. Navigation is a persistent top bar, sticky on scroll, with clear text links.

## Imagery

Imagery is functional and product-focused, primarily consisting of dark-themed UI screenshots that showcase the Better Stack platform. These embeds are contained within cards or placed alongside text. Iconography is minimalist, often monochrome or in Cloud Whisper (#c9d3ee), with clear, outlined styles, appearing at a small to medium stroke weight. No full-bleed photography or complex illustrations are present. The density of imagery is low, with visuals serving explanatory roles rather than decorative atmosphere, letting the UI and typography dominate.

## Elevation

| Element | Style |
| --- | --- |
| Nav, Button | inset 0px 1px 3px 0px rgba(255, 255, 255, 0.25) |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Dark UI, focus on structured data, subtle elevation, and a minimalist typographic approach with a single accent color. |
| Vercel | Technical, dark-themed interface with clean typography, restrained use of color for functional highlights, and a focus on product screenshots. |
| Supabase | Developer-centric dark mode emphasizing data and code, compact information density, and subtle branding through UI elements. |
| Stripe (dark mode) | Sophisticated dark theme, precise typography, a strong focus on data visualization, and components designed for internal tool-like functionality. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #939db8
background: #0f101a
border: #1f2433
accent: #98a4f7
primary action: #151621 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #151621 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design an Informative Card: background Graphite Panel (#151621), 16px border radius, 20px padding. Inside, place a heading (Helvetica Now Display, 40px, weight 500, Pure White (#ffffff)) and body text (Helvetica Now Text, 14px, weight 400, Ash Text (#939db8)).
3. Render an Input Field: background rgba(0.594223, 0.00140271, -0.0566696, 0.1), border 1px solid Steel Overlay (#1f2433), text Pure White (#ffffff), 12px border radius, 0px vertical 20px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510659246-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510659246-thumb.jpg |
