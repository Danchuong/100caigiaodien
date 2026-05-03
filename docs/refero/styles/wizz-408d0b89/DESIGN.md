# Wizz — Refero Style

- Refero URL: https://styles.refero.design/style/408d0b89-be7d-4a09-bc29-8a8ce13d0a7b
- Site URL: https://wizzapp.com
- ID: 408d0b89-be7d-4a09-bc29-8a8ce13d0a7b
- Theme: dark
- Industry: productivity
- Created: 2026-04-30T00:41:01.440Z
- Ranks: newest: 730, popular: 1174, trending: 1140

> Fuchsia-powered dark mode

## Description

Wizz embraces a bold, high-contrast dark theme with a vibrant fuchsia accent color that creates a playful, energetic atmosphere. Typography is a central element, using distinct custom sans-serif typefaces for sharp, impactful headlines and clear body text. Surfaces are mostly dark and flat, relying on the single accent color for primary actions and highlights, with subtle elevation for key interactive elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #000000 | neutral | Page backgrounds, card surfaces, primary text on light backgrounds |
| Ghost White | #ffffff | neutral | Prominent text on dark backgrounds, active states |
| Steel Gray | #dadada | neutral | Muted text, hairline borders, placeholder text |
| Ink Wash | #444444 | neutral | Subtle dark backgrounds, input text |
| Charcoal | #292929 | neutral | Secondary surface backgrounds, ghost button fills |
| Cloud Mist | #eeeeee | neutral | Input background fill on light surfaces |
| Wizz Fuchsia | #ff3d9e | brand | Primary action buttons, links, accents on headings, input active states – creates immediate visual focus and brand recognition |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| PolySans Median | Inter | 400, 600, 700 | 10px, 13px, 14px, 16px, 18px, 86px | 0.85, 1.00, 1.10, 1.20, 1.25, 1.44, 1.50, 2.00 | Dominant display and headline font for punchy, modern statements, also used for some body text and navigation items. |
| PolySans Neutral | Inter | 400 | 14px, 16px, 18px | 1.20, 1.30, 1.40, 1.50 | Supplemental body and link text, offering clean readability in smaller contexts. |
| PolySans Bulky | Inter Bold | 700 | 72px | 1.00 | Used for very large, impactful titles, commanding attention. |
| PolySans Slim | Inter Light | 300 | 14px | 1.00, 1.10 | Delicate, light-weight text for subtle headings, links, and buttons, conveying a sophisticated restraint. |
| Inter | System UI | 400 | 12px | 1.20 | Default system font for utility text, labels, and card descriptions. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.5 |
| body | 14 | 1.5 |  |
| heading-sm | 18 | 1.25 |  |
| heading | 72 | 1 |  |
| display | 86 | 0.85 | -1 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "inputs": "12px",
    "avatars": "24px",
    "buttons": "12px",
    "navItems": "999px"
  },
  "elementGap": "10px",
  "sectionGap": "80px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** The main call to action button.

Filled with Wizz Fuchsia (#ff3d9e), text in browser default blue (likely overridden to white in practice), 12px border radius, 10px vertical and 16px horizontal padding.

### Ghost Header Button

**Role:** Used for secondary actions in the header.

Background Charcoal (#292929), text in browser default blue (likely white). Has a 999px border radius (pill shape) with 4px vertical and 10px horizontal padding.

### Nav Link

**Role:** Standard navigation item with minimal styling.

Transparent background, Steel Gray (#dadada) text color, no border or radius, zero padding.

### Cookie Consent Card

**Role:** Information panel for cookie settings.

Midnight Void (#000000) background, 14px border radius, inset border of 1px solid Steel Gray (#dadada).

### Text Input (Dark)

**Role:** Standard text input field in a dark context.

Midnight Void (#000000) background, Ink Wash (#444444) text, Ink Wash (#444444) border, 10px border radius, 10px padding.

### Text Input (Light)

**Role:** Standard text input field in a light context.

Cloud Mist (#eeeeee) background, Ink Wash (#444444) text, Ink Wash (#444444) border, 10px border radius, 10px padding.

## Do's

- Use Midnight Void (#000000) as the primary background for all major sections unless otherwise specified.
- Apply Wizz Fuchsia (#ff3d9e) for all primary calls to action, ensuring text color contrasts sufficiently.
- Utilize 12px border radius for all inputs, buttons, and cards to maintain a consistent soft, modern feel.
- Employ PolySans Median for all headings to leverage its distinct character, varying weights as needed for hierarchy.
- Maintain a clear visual hierarchy by contrasting Ghost White (#ffffff) for primary text on dark backgrounds and Midnight Void (#000000) for text on lighter neutral sections.
- Use a 999px border radius (pill shape) for all ghost buttons and small informational tags in the header.
- Apply Steel Gray (#dadada) for subtle dividers, borders, and muted supporting text.

## Don'ts

- Avoid generic system default colors; exclusively use colors from the defined palette.
- Do not use multiple accent colors; Wizz Fuchsia (#ff3d9e) is the sole vibrant accent for interactivity and brand highlighting.
- Do not introduce heavy shadows or gradients on elements; maintain a largely flat and sharp aesthetic with subtle elevation for key interactive components.
- Avoid using serif fonts or highly decorative typefaces; adhere strictly to the PolySans family and Inter for all textual content.
- Do not deviate from the established border radii for components; the varied but specific radii (12px, 999px, 24px) are a key part of the brand's visual identity.
- Do not use broad, full-width content sections; contain most content within a defined horizontal width for better readability and structure.
- Avoid overly bright or light backgrounds for main content areas; maintain the dark-mode aesthetic predominantly.

## Layout

The page primarily uses a full-bleed layout for background elements and a centered, contained content model for text and components, with an implicit max-width. The hero section often features a full-width gradient backdrop with a large, centered headline. Content sections alternate between visually distinct blocks, often presenting a two-column layout with text on one side and a visual (like a phone screenshot or user gallery) on the other. Vertical rhythm is established through consistent section gaps. Navigation is a sticky top bar with pill-shaped buttons and subtly styled links.

## Imagery

The site uses a mix of dark, immersive gradients for hero sections and UI surfaces (blending purple, orange, pink), contrasted with clean, product-focused photography featuring phone screens and diverse user profile images. Graphics are minimal, relying on simple icons (likely outlined, matching the site's generally sparse visual style). Imagery is primarily decorative atmosphere for the hero and expressive content for user representation, maintaining a high-contrast aesthetic against dark backgrounds.

## Elevation

| Element | Style |
| --- | --- |
| Dropdown/Menu | rgba(0, 0, 0, 0.05) 0px 1px 10px 0px |
| Button (promoted) | rgba(0, 0, 0, 0.3) 0px 1px 30px 0px |
| Card (inset border) | rgb(218, 218, 218) 0px 0px 0px 1px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Discord | Dark UI with a single vibrant accent color for interaction and branding. |
| Figma | Sharp, modern typography and a focus on clean, functional dark surfaces with minimal decorative elements. |
| Linear | High-contrast dark theme, crisp typography, and subtle elevation for core UI components. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #dadada
accent: #ff3d9e
primary action: #ff3d9e (filled action)

Example Component Prompts:
1. Create a Primary Action Button: Wizz Fuchsia (#ff3d9e) background, text color should contrast well (e.g. #ffffff), 12px radius, 10px vertical and 16px horizontal padding, PolySans Slim 14px weight 300 text.
2. Create a Header Ghost Button: Charcoal (#292929) background, Ghost White (#ffffff) text, 999px radius, 4px vertical and 10px horizontal padding, PolySans Median 14px weight 400 text.
3. Create a Cookie Consent Card: Midnight Void (#000000) background, 14px radius, 1px inset border of Steel Gray (#dadada), with Inter 12px weight 400 text for its content.
4. Create a prominent heading: PolySans Bulky 72px weight 700 text, Ghost White (#ffffff) color.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509629576-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509629576-thumb.jpg |
