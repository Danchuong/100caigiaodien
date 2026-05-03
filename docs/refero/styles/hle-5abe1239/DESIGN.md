# HLE — Refero Style

- Refero URL: https://styles.refero.design/style/5abe1239-79b9-4ebc-b4d1-9b2a85dc29a4
- Site URL: https://hle.io
- ID: 5abe1239-79b9-4ebc-b4d1-9b2a85dc29a4
- Theme: dark
- Industry: media
- Created: 2026-04-30T01:22:36.358Z
- Ranks: newest: 618, popular: 159, trending: 105

> grayscale retro-digital terminal

## Description

HLE employs a grayscale retro-digital aesthetic, presenting an interface that feels like a vintage computer terminal. The design is characterized by its high contrast starkness and extremely compact, monochromatic typography with a distinct pixelated mono-space flair. Functional elements appear as subtle text-based interactions or simple toggle switches, maintaining an atmosphere of focused, understated utility rather than modern graphical richness. Surface treatments are minimal, relying on subtle background shifts and hard-edged borders for separation, eschewing shadows or complex gradients.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Base | #101011 | neutral | Primary page background, most text, inactive navigation text |
| Ghost Canvas | #ffffff | neutral | Tertiary background sections, primary text for dark backgrounds, button text on dark. Also used for focus borders and outline styles |
| Slate Highlight | #bbbbbb | neutral | Secondary background surfaces and occasional text accents. Creates a subtle tonal shift against the primary backgrounds |
| Elevated Panel | #313131 | neutral | Background for elevated panels or containers, offering a darker gray for layered content |
| Subtle Gray | #8a8a8a | neutral | Faint backgrounds or very muted text |
| Medium Gray | #717172 | neutral | Navigation panel background |
| Toggle Blue | #32A4C3 | accent | On/active state for toggle switches and potential accent elements — a cool, utilitarian highlight |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| PPSupplySansRegular | Inter | 400 | 10px, 118px | 0.99, 1.20 | Primary sans-serif font for general UI text, headings, and larger display elements. Its sparse size data suggests highly specific usage for key visual elements. |
| PPSupplyMonoRegular | IBM Plex Mono | 400 | 15px | 1.30 | Monospaced font for body text, navigation items, buttons, and code-like snippets. This typeface defines the site's retro-digital character, reinforcing the terminal aesthetic. |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px",
    "containers": "12px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Text Link / Ghost Button

**Role:** Interactive element for navigation and actions that appears as simple text. It has a subtle 4px internal padding, drawing a thin line around itself on hover or focus using the text color to maintain its ghost-like appearance.

text-based interaction; text color #101011 or #ffffff; transparent background; no explicit border-radius; 4px padding.

### Navigation Toggle Switch

**Role:** Binary control for activating or deactivating features, like sound. Styled as a small, pill-shaped switch with a distinct accent color for its active state.

Pill-shaped toggle with a #717172 track background and a #101011 thumb when inactive; active state uses #32A4C3.

## Do's

- Prioritize PPSupplyMonoRegular (or IBM Plex Mono) for all body text, navigation, and button labels to establish the core retro-digital aesthetic, using 15px/1.3 line height.
- Implement Ghost Canvas #ffffff as the primary text color on Midnight Base #101011 backgrounds, reserving Midnight Base #101011 for text on lighter backgrounds.
- Use a 0px border-radius as a default for all UI elements, reinforcing the sharp, hard-edged character of the design.
- All interactive elements should rely on text color changes or thin, same-color borders for interactive states, avoiding filled button backgrounds or significant elevation.
- Employ a 4px padding for minimal interactive elements like navigation items and ghost buttons, maintaining compactness.
- Section spacing should consistently use 48px vertical padding to create clear content blocks without feeling overly dense.
- When a container needs subtle differentiation, use Elevated Panel #313131 as the background color, indicating a layered context without heavy visual weight.

## Don'ts

- Avoid using drop shadows or complex gradients; the system relies on flat colors, stark contrast, and minimal shifts between grayscale tones for visual depth.
- Do not introduce bright, saturated colors unless explicitly tied to an accent or semantic role defined in the color palette (e.g., Toggle Blue, Alert Red).
- Do not use overly large or decorative heading styles that deviate from the compact, utilitarian typography; stick to PPSupplySansRegular with minimal letter spacing.
- Do not create complex layouts with overlapping elements or varied border radii; maintain a clean, organized, and almost grid-like structure.
- Avoid decorative imagery or illustrations; imagery should be minimal and either abstract or product-focused to align with the technical, terminal-like atmosphere.
- Do not use multiple font families beyond PPSupplySansRegular and PPSupplyMonoRegular, as this dilutes the distinctive typographic identity.

## Layout

The page uses a full-bleed layout, with content often centered but without a fixed `pageMaxWidth` value, adapting responsively to the viewport. The hero section features a central, symbolic graphic (the retro monitor) that acts as an anchor for the primary interaction text 'Switch Day 'N' Night'. Sections are delineated by consistent vertical spacing of 48px, creating clear, distinct blocks without overt visual dividers. Content elements, such as the navigation in the top-left, tend to be anchored to screen corners. The layout is sparse and text-dominant, with a clear bottom-aligned footer containing utilitarian information. The overall rhythm is calm and deliberate, guiding the eye vertically.

## Imagery

The site uses minimal imagery, primarily focusing on abstract or product-focused visuals such as the retro CRT monitor. There are no expansive photographs or complex illustrations. Iconography, like the current time display, is simple, mono-color, and uses a thick stroke weight to match the overall aesthetic. Imagery serves an explanatory or atmospheric role, not a decorative one, and is always isolated rather than overlapping, integrated seamlessly into the monochromatic UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Monochromatic, content-focused layout with minimal ornamentation and a strong emphasis on typography, particularly for navigation and interactive elements. |
| Terminal.com | Heavy reliance on monospace typography, dark mode, and a utilitarian, code-editor-like aesthetic across the UI. |
| Read.cv | High-contrast text-heavy design with a focus on simple borders, clear hierarchy through spacing, and a lack of overt visual flair. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #101011
background: #101011
border: #ffffff
accent: #32A4C3
primary action: no distinct CTA color

Example Component Prompts:
1. Create a primary navigation link: uses 'PPSupplyMonoRegular' at 15px, weight 400, color #101011, with 4px padding. It animates to color #ffffff on hover. When active, it displays a small dot to its left.
2. Design the 'Sound' toggle switch: track color #717172, thumb color #101011. When active, the track color changes to #32A4C3, with the thumb remaining #101011.
3. Create a footer copyright text block: uses 'PPSupplyMonoRegular' at 15px, weight 400, color #101011. This block should have 24px vertical padding and 40px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512139092-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512139092-thumb.jpg |
