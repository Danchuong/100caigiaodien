# ORYZO AI — Refero Style

- Refero URL: https://styles.refero.design/style/1f204e95-454a-437e-845b-c1b169d35607
- Site URL: https://oryzo.ai
- ID: 1f204e95-454a-437e-845b-c1b169d35607
- Theme: dark
- Industry: other
- Created: 2026-04-30T00:11:38.351Z
- Ranks: newest: 877, popular: 483, trending: 346

> Cork-textured midnight laboratory

## Description

ORYZO AI embraces a deep, textural aesthetic, contrasting rich, dark surfaces with a warm, desaturated highlight palette. Textures and a muted orange accent color punctuate the composition, creating a refined yet tactile experience. The typography, primarily a custom variable font, leans into density and slight tracking, reinforcing a sense of engineered precision. This system feels grounded and thoughtfully constructed with a focus on core product detail.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Pitch Darkness | #100904 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Cork Dust | #ffedd7 | neutral | Primary text across dark backgrounds, light button backgrounds, input text and borders. Provides high contrast |
| Rust Accent | #dc5000 | brand | Important accent details, button backgrounds for primary actions, decorative borders, active state indicators. A warm, vivid focal point |
| Olive Green | #445231 | brand | Subtle background accents, decorative text. A muted, organic highlight |
| Faded Bark | #382416 | neutral | Button backgrounds for secondary actions, subtle surface distinction. A warmer, slightly lighter neutral than Pitch Darkness |
| Aged Stone | #887b6d | neutral | Secondary text, muted helper text, subtle outlines |
| Light Cork | #f6e0c6 | neutral | Subtle background surfaces, highlights. A very light, near-neutral tone |
| Faint Hazel | #bbac97 | neutral | Tertiary text, decorative elements with reduced prominence |
| Subtle Moss | #5d6c49 | brand | Minor decorative details, secondary green accents |
| Grayscale Gray | #808080 | neutral | Table borders, general neutral separators |
| Chalkboard Black | #000000 | neutral | Used sparingly for icon fills |
| Deep Mocha | #40372e | neutral | Darker, almost black borders |
| Rainbow Spectrum | #e95000 | accent | A distinct background gradient for hero sections or prominent visual statements, featuring a vibrant multi-color blend |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| halyard-display-variable | Inter | 400, 500, 600, 700 | 10px, 12px, 14px, 15px, 16px, 17px, 18px, 23px, 24px, 29px, 34px, 41px, 49px, 51px, 64px, 123px, 147px, 227px, 410px | 0.90, 1.00, 1.09, 1.10, 1.20, 1.26, 1.33, 1.50, 1.78, 2.50, 3.00 | Primary UI text for headings, body, buttons, navigation, and badges. Its variable weights and precise tracking create a dense, modern feel. |
| Literata | Merriweather | 200, 300, 500 | 10px, 13px, 37px, 44px | 1.00, 1.20, 1.50, 2.36 | Sub-headings and decorative text. Its lighter weights provide an elegant contrast to the primary typeface, hinting at a handcrafted quality. |
| DM Mono | ui-monospace | 400 | 14px | 1.33 | Monospaced text for code snippets or technical details. |
| Arial | sans-serif | 400, 500 | 8px, 12px | 1.00, 1.10, 1.20 | Fallback and utilitarian text, typically for small annotations or less prominent captions. Avoid direct usage when custom fonts are loaded. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0 |
| body | 14 | 1.33 | 0 |
| body-lg | 16 | 1.26 | 0 |
| subheading | 18 | 1.2 | 0 |
| heading | 23 | 1.09 | -0.018 |
| heading-lg | 34 | 1.09 | -0.018 |
| display-sm | 49 | 1 | -0.018 |
| display | 64 | 0.9 | -0.045 |
| display-xl | 147 | 0.9 | -0.045 |
| display-hero | 410 | 0.9 | -0.045 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "badges": "36px",
    "buttons": "36px"
  },
  "elementGap": "18px",
  "sectionGap": "45px",
  "cardPadding": "18px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Filled button

Background: Rust Accent (#dc5000), text: Pitch Darkness (#100904). Padding: 14.4px vertical, 24px horizontal. Full pill shape with 36px radius.

### Secondary Action Button

**Role:** Filled button

Background: Faded Bark (#382416), text: Cork Dust (#ffedd7). Padding: 18px vertical, 36px horizontal. Full pill shape with 36px radius.

### Ghost Button (Orange Border)

**Role:** Outlined button

Background: Faded Bark (#382416), text: Cork Dust (#ffedd7), border: 1px solid Rust Accent (#dc5000). Padding: 18px vertical, 36px horizontal. Full pill shape with 36px radius.

### Light Ghost Button

**Role:** Outlined button

Background: Cork Dust (#ffedd7), text: Pitch Darkness (#100904), border: 1px solid Pitch Darkness (#100904). Padding: 14.4px vertical, 24px horizontal. Full pill shape with 36px radius.

### Form Input Field

**Role:** Input element

Background: transparent, text & border: Cork Dust (#ffedd7). Padding: 12px vertical, 18px horizontal. No border radius, sharp corners. Placeholder text uses Cork Dust (#ffedd7).

### Invisible Badge

**Role:** Informational tag

Transparent background, text: Cork Dust (#ffedd7). No padding or border radius. Used for minimal, content-adjacent labels.

## Do's

- Prioritize Pitch Darkness (#100904) for all background surfaces to maintain a deep, rich foundation.
- Use Cork Dust (#ffedd7) extensively for primary text and highlights against dark backgrounds, ensuring readability and contrast.
- Employ Rust Accent (#dc5000) sparingly as a functional highlight for primary actions and key interactive elements.
- Apply halyard-display-variable for all main headings and body text, varying weights for hierarchy and using negative letter-spacing for density.
- Ensure all buttons have a 36px border-radius to consistently achieve a full pill shape.
- Maintain an 18px elementGap for consistent spacing between distinct UI elements.
- Leverage the gradients, particularly the Rainbow Spectrum, exclusively for hero sections or large, impactful visual backgrounds to create a sense of wonder and depth.

## Don'ts

- Avoid using Rust Accent (#dc5000) for large blocks of text or decorative elements, as its vibrance should be reserved for actionable focus.
- Do not introduce additional bold, saturated colors beyond Rust Accent and Olive Green; the palette relies on controlled chromatic accents.
- Do not deviate from the full pill 36px button radius; inconsistent radii will break the tactile and rounded component aesthetic.
- Avoid excessive spacing or empty canvases; the design maintains a comfortable density, particularly with tight text alignment.
- Do not use generic system fonts when halyard-display-variable and Literata are available; the custom typography is crucial to the brand's identity.
- Do not apply shadows or complex elevation to UI elements; the system prioritizes flat surfaces and subtle texture over layered depth cues.

## Layout

The page primarily uses a full-bleed, dark background model that creates an immersive canvas. The hero section often features large, centered product renders over a dark gradient background, setting an immediate, dramatic tone. Content sections beneath follow a structured, often two-column layout with text-dominant blocks offset by product visuals, maintaining a comfortable density. Vertical section spacing is consistent, without hard dividers, relying on shifts in background tone or large product imagery to delineate new content areas. Navigation is minimal: a sticky top-right menu for primary links, and a small, fixed vertical 'ORYZO + MODEL' slider on the right edge, emphasizing product exploration.

## Imagery

The site uses a mix of high-fidelity 3D product renders and abstract visual textures. Product imagery features the cork coaster as the central element, often floating or subtly angled against dark, minimal backgrounds, emphasizing its form and material. Photography is limited, focusing on high-key abstract shots of materials like cork or production-related tools, often with a slight yellow-orange tint. Iconography is minimal, using simple fills in Pitch Darkness or Cork Dust, contributing less to visual density and more to functional clarity. There are no lifestyle photos or complex illustrations; the imagery is precise, object-focused, and plays a supportive role to the core product narrative.

## Similar Brands

| Business | Why |
| --- | --- |
| Apple (Product Pages) | Focus on high-fidelity 3D product renders against stark, minimal backgrounds, allowing the product to be the hero. |
| Stripe | Clean, dark mode UI with a focus on refined typography and a limited, high-contrast color palette for functional elements. |
| Linear | Dark-themed interface, using subtle background variations and controlled accent colors, with a strong emphasis on precise typography and compact information display. |
| Figma (dark mode) | Functional dark UI that uses a limited, yet effective, color palette to distinguish interactive elements without overwhelming the user. |
| Master & Dynamic (product marketing) | Luxurious dark aesthetic, accentuating product details with sophisticated typography and rich textures. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffedd7
background: #100904
border: #100904
accent: #dc5000
primary action: #dc5000 (filled action)

Example Component Prompts:
Create a Primary Action Button: #dc5000 background, #ffedd7 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
Create a secondary action button: Background #382416, text #ffedd7, 36px radius, 18px vertical padding, 36px horizontal padding, 'halyard-display-variable' font, weight 400.
Create a ghost button: Background #382416, text #ffedd7, 1px solid border #dc5000, 36px radius, 18px vertical padding, 36px horizontal padding, 'halyard-display-variable' font, weight 400.
Create an input field: Transparent background, text #ffedd7, 1px solid border #ffedd7, 0px radius, 12px vertical padding, 18px horizontal padding, 'halyard-display-variable' font, weight 400.
Create a hero headline: Text 'Cork Dust' (#ffedd7), 410px size, 'halyard-display-variable' font, weight 700, line-height 0.9, letter-spacing -0.045em on a 'Pitch Darkness' (#100904) background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507873891-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507873891-thumb.jpg |
