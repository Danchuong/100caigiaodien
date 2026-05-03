# Jeton — Refero Style

- Refero URL: https://styles.refero.design/style/1f32d914-6fdd-4692-b4fc-fcee2c414766
- Site URL: https://www.jeton.com
- ID: 1f32d914-6fdd-4692-b4fc-fcee2c414766
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:28:05.747Z
- Ranks: newest: 791, popular: 651, trending: 500

> Vibrant gradient pulse.

## Description

Jeton's design system radiates a vibrant, energetic feel with a strong focus on a single, dominant red accent color. Typography is precise and impactful, preferring tightly tracked, strong headlines. Surfaces are primarily clean white, contrasted by gradients that inject warmth and dynamism. Components feature generous border-radii, often creating pill shapes, and subtle shadows or gradient overlays are used sparingly for depth and interaction feedback.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, primary text on dark backgrounds |
| Text Black | #000000 | neutral | General body text, icons, neutral button text |
| Jeton Red | #f73b20 | brand | Primary brand color. Outlined actions, badges, decorative elements, accents, and hero gradients; Primary hero section background, providing a warm, dynamic visual anchor |
| Red Velvet | #360802 | neutral | Muted text, input placeholder text, subtle icon details |
| Flamingo Pink | #f84d35 | accent | Accent surface background in navigation elements, decorative elements |
| Fiery Rose | #fb2d54 | accent | Red outline accent for tags, dividers, and focused UI edges. |
| Ocean Blue | #477ee9 | accent | Violet outline accent for tags, dividers, and focused UI edges. |
| Mint Green | #34c771 | accent | Green outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Sequel Sans | Inter, Montserrat | 400, 450, 500 | 12px, 14px, 16px, 23px, 33px, 44px, 72px, 106px, 110px, 155px | 0.90, 1.00, 1.20, 1.25, 1.40, 1.50 | Primary brand typeface for all text. Headlines tend to be large and tightly tracked for visual impact, while body text balances readability with a confident, modern feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.4 | 0.12 |
| body-sm | 14 | 1.4 |  |
| body | 16 | 1.4 |  |
| subheading | 23 | 1.25 |  |
| heading-sm | 33 | 1.2 | 0.33 |
| heading | 44 | 1.2 | 0.44 |
| heading-lg | 72 | 1 | 0.72 |
| display | 155 | 0.9 | 1.55 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "links": "8px",
    "pills": "84px",
    "inputs": "16px",
    "buttons": "16px"
  },
  "elementGap": "8px",
  "sectionGap": "51px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Outline Primary Button

**Role:** Call to action button for primary actions.

Ghost button with Jeton Red text and a 1px Jeton Red border, 16px border-radius, no background fill. Text uses Sequel Sans, weight 400.

### Outline Inverse Button

**Role:** Secondary call to action, or actions on dark backgrounds.

Ghost button with Canvas White text and a 1px Canvas White border, 84px (pill-shaped) border-radius, no background fill. Text uses Sequel Sans, weight 400, with 16px horizontal padding.

### Neutral Pill Button

**Role:** Informational or navigation buttons in neutral contexts.

Pill-shaped button with Text Black text and a 1px Text Black border, 16px border-radius, no background fill. Has 12px padding all around.

### App Store Link Card

**Role:** Download links for mobile applications.

Card with Canvas White background, 16px border-radius, and a soft shadow (rgba(0, 0, 0, 0.05) 0px -4px 16px 0px). No internal padding specified, assumed to be content-driven.

### Accent Highlight Card

**Role:** Decorative card for emphasized content.

Card with a soft Jeton Red background (rgba(247, 59, 32, 0.05)), 16px border-radius, and no shadow. No internal padding.

### Pill Navigation Button

**Role:** Navigation items within a segmented control or menu.

Pill-shaped button with Jeton Red text, no border or background (transparent), and a massive 84px border-radius for fluid shapes. Has 16px horizontal padding.

### Form Input Field

**Role:** Standard input field for user data.

Input field with subtle Jeton Red background (rgba(247, 59, 32, 0.05)), Red Velvet text and border, and 16px border-radius. Includes 17.6px top padding, 10px right padding, 6.4px bottom padding, and 48px left padding.

## Do's

- Always use Sequel Sans for all text elements, prioritizing weights 400, 450, and 500 for clarity.
- Apply Jeton Red (#f73b20) as the primary accent, particularly for interactive elements, outlined actions, and key branding.
- Ensure all primary call-to-action buttons are ghost buttons with Jeton Red text and borders, following the Outline Primary Button component specification.
- Use 16px for card, button, and input border-radii, embracing the rounded aesthetic.
- Implement the Sunrise Gradient linear-gradient(rgba(122, 39, 57, 0) 15%, rgb(247, 59, 32) 69%) for hero sections and prominent visual backgrounds.
- Maintain a default letter-spacing of 0.0100em or 0.0300em, specially for headlines, to achieve a compact and impactful typographic appearance.
- Utilize Canvas White (#ffffff) for all main page backgrounds and component surfaces to provide a clean, expansive canvas.

## Don'ts

- Do not introduce new color hues; strictly adhere to the defined brand, accent, and semantic palette.
- Avoid solid background fills for primary calls to action; always prefer the outlined Jeton Red style.
- Do not deviate from the established border-radii; avoid sharp corners or excessively small radii.
- Never use generic system fonts; always utilize Sequel Sans or its approved substitutes.
- Do not use heavy, opaque shadows unless specifically for card elevation (rgba(0, 0, 0, 0.05) 0px -4px 16px 0px).
- Avoid overly loose letter-spacing; maintain a tight, controlled textual presentation especially for headings.
- Do not overuse accent colors, ensure they serve a functional or brand-defining purpose.

## Layout

The page primarily uses a full-bleed layout for hero sections, transitioning to a contained, max-width layout for subsequent content. The hero typically features a centered headline over a gradient background with a prominent 3D abstract graphic. Section rhythm is often seamless, with consistent vertical spacing and a lack of strong visual dividers, except for subtle card elevations. Content arrangement often utilizes centered stacks or dual-column text-left/image-right patterns. A grid of cards can be seen for feature showcases. The navigation is a sticky top bar with a minimal set of links, along with a secondary bottom navigation or floating support button. The design leans towards a comfortable density, allowing visual breathing room.

## Imagery

Jeton uses a mix of abstract 3D renders with a volumetric, gradient light treatment, product screenshots embedded in device mockups, and vibrant brand-colored icons. Photography is absent. Abstract 3D elements are prominent in hero sections, creating a dynamic and modern feel. Icons are clean, often filled, and use the brand's primary and accent colors to denote different categories or actions (e.g., green for 'Add', blue for 'Send', red for 'Exchange'). The overall density is balanced, with imagery serving as decorative atmosphere and explanatory content, rather than overwhelming the layout.

## Elevation

| Element | Style |
| --- | --- |
| App Store Link Card | rgba(0, 0, 0, 0.05) 0px -4px 16px 0px |
| Navigation/Other | rgba(247, 59, 32, 0.1) 0px 8px 24px 0px, rgba(247, 59, 32, 0.05) 0px 2px 8px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Revolut | Monolithic, vibrant branding with a strong single accent color and clean UI. |
| N26 | Clean white backgrounds contrasted with specific colored illustrations and tightly organized components. |
| Stripe | Emphasis on clear, precise typography and product-focused imagery over lifestyle photography. |
| Wise (formerly TransferWise) | Bold use of color accents on an otherwise neutral UI, with a focus on financial functionality. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #000000
- background: #ffffff
- border: #f73b20
- accent: #f73b20
- primary action: #f73b20 (outlined action border)

### 3-5 Example Component Prompts
1. Create a hero section: Sunrise Gradient background, centered heading 'One app for all needs' (Sequel Sans, size 155px, weight 500, letter-spacing 1.55px, color #ffffff). Below it, display an Outline Inverse Button 'Sign up' (Sequel Sans, size 16px, weight 400, color #ffffff, 84px radius, 16px horizontal padding).
2. Create a feature section: Canvas White background. Heading 'Unify your finances' (Sequel Sans, size 72px, weight 500, letter-spacing 0.72px, color #f73b20). Below the heading, a stack of three Accent Highlight Cards, each featuring a semantic icon (green, blue, red respectively) with corresponding text ('Add', 'Send', 'Exchange') using Fiery Rose, Ocean Blue, and Mint Green for their text colors. Each card has a subtle Jeton Red background (rgba(247, 59, 32, 0.05)) and 16px radius.
3. Create an Outlined Primary Action: Transparent background, #f73b20 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508860779-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508860779-thumb.jpg |
