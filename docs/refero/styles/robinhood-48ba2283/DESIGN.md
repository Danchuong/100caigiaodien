# Robinhood — Refero Style

- Refero URL: https://styles.refero.design/style/48ba2283-13b5-423a-8742-390ea4e53c36
- Site URL: https://robinhood.com
- ID: 48ba2283-13b5-423a-8742-390ea4e53c36
- Theme: dark
- Industry: fintech
- Created: 2026-02-13T15:12:42.000Z
- Ranks: newest: 1191, popular: 492, trending: 620

> Electric lime on a dark canvas. The design feels like a financial dashboard powered by neon-green data points against a dark, responsive background.

## Description

This system evokes a high-contrast, edgy digital experience, like a sleek command interface. Its stark visual identity is built on a limited palette of near-black, pure white, and a single, aggressive electric lime green. Typography plays a crucial role in establishing authority through custom typefaces, with a distinct serif for display headings creating a sense of luxury and importance, while a sans-serif maintains legibility for body text. Rounded pill-shaped buttons stand out against the predominantly angular design, providing clear interactive points.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Space Black | #110e08 | neutral | Page backgrounds, card surfaces, primary text on Rocket Lime background, button backgrounds for secondary actions. |
| Void Black | #000000 | neutral | Text color on Rocket Lime buttons, accents, footer background. |
| Ghost White | #ffffff | neutral | Primary text, informational text on Deep Space Black. |
| Shadow Graphite | #35322d | neutral | Subtle border colors, secondary text elements, minor outlines. |
| Rocket Lime | #ccff00 | brand | Call-to-action buttons, active states, key interactive elements, brand highlights — a potent, high-energy accent against dark neutrals. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Capsule Sans Text | Inter | 400 | 13px, 16px, 31px, 72px, 80px | 1.00, 1.08, 1.20, 1.26 | Versatile sans-serif for body text, navigation, buttons, and some larger display elements. Its varied letter-spacing creates a distinct visual rhythm, tightening at larger sizes for impact and loosening for readability in smaller text. |
| Phonic | Georgia | 400, 700 | 16px, 22px, 31px | 1.09, 1.26, 1.50 | Secondary serif font for body and link text, providing a classic counterpoint to the sans-serif. Its heavier weights are used for more prominent text within content blocks, offering a subtle visual hierarchy. |
| Martina Plantijn | Playfair Display | 400 | 72px, 80px | 1.00, 1.08 | Signature serif font for primary headlines and display text. Its elegant, slightly condensed forms are central to the brand's sophisticated feel, creating a sense of established authority amidst the modern aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.26 | -0.077 |
| body | 16 | 1.5 | -0.008 |
| subheading | 22 | 1.09 | -0.011 |
| heading | 31 | 1.2 | -0.019 |
| display | 72 | 1.08 | -0.014 |
| display-lg | 80 | 1 | -0.014 |

## Spacing & Shape

```json
{
  "radius": {
    "inputs": "36px",
    "buttons": "36px"
  },
  "elementGap": "8px",
  "sectionGap": "",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Stock Token Feature Card



### Asset Search & Tab Bar



### Primary Call-to-Action Button

**Role:** Action

Pill-shaped button with Rocket Lime (#ccff00) background, Void Black (#000000) text, 36px border-radius, and generous horizontal padding (32px left/right), vertical padding 0px. The leading action element.

### Secondary Ghost Button

**Role:** Action

Minimalist button with transparent background, Deep Space Black (#110e08) text, 36px border-radius, and 32px horizontal padding. Offers an alternative action of lesser prominence.

### Inline Text Link

**Role:** Navigation/Action

Ghost White (#ffffff) text using Phonic font, weight 400; no distinct background or padding, emphasizing its textual nature within content.

### Navigation Link

**Role:** Navigation

Ghost White (#ffffff) text using Capsule Sans Text font, weight 400. Appears in the top navigation bar and footer with no background or border, relying on placement and color for distinction.

### Input Field (example)

**Role:** Data Entry

Based on button radius, likely features 36px border-radius with a Deep Space Black (#110e08) background and Ghost White (#ffffff) text, or a Shadow Graphite (#35322d) border for definition.

## Do's

- Prioritize Deep Space Black (#110e08) for backgrounds and Ghost White (#ffffff) for primary text to maintain high contrast.
- Use Rocket Lime (#ccff00) exclusively for primary CTA buttons and explicit accent elements, never for large blocks or generic text.
- Apply 36px border-radius to all interactive components like buttons and inputs for a consistent 'pill' shape.
- Utilize Martina Plantijn at 72px or 80px for all page-level headlines to establish a luxurious and authoritative tone.
- Ensure consistent spacing with the 8px base unit, particularly for element-to-element gaps.
- Leverage Capsule Sans Text for all body copy and most UI elements, adjusting letter-spacing as per its defined profiles for optimal visual rhythm.

## Don'ts

- Do not introduce new vibrant colors outside of the Rocket Lime (#ccff00) accent.
- Avoid using hard-edged rectangles for interactive elements; all buttons and input fields must be pill-shaped with 36px radius.
- Do not use generic system fonts; stick strictly to Capsule Sans Text, Phonic, and Martina Plantijn.
- Do not dilute the impact of Rocket Lime by using it for non-interactive or purely decorative elements.
- Refrain from heavy drop shadows or excessive elevation; the aesthetic relies on flat, high-contrast layers and typography for hierarchy.
- Avoid using multiple line-heights or letter-spacings for the same font/size combination — adhere to the defined typographic profiles.

## Layout

The page primarily employs a max-width contained layout, though the initial hero section is full-bleed with a deep black background and centered headline. Sections alternate between dark backgrounds (Deep Space Black) and lighter, usually Rocket Lime (#ccff00), for distinct content blocks, creating a strong visual rhythm without explicit dividers. Content is generally arranged in a centered stack for the hero, transitioning into two-column layouts (text beside device mockups) or stacked blocks for feature explanations. The footer is full-bleed deep black, echoing the hero. The navigation is a fixed top bar on a deep black background, centered with interactive elements.

## Imagery

The visual language relies heavily on abstract graphics and product screenshots, with a notable absence of lifestyle photography. Product screenshots feature mobile interfaces in deep black, demonstrating app functionality clearly. Abstract graphics often use the brand's electric lime color to highlight key information or create dynamic backgrounds, particularly for the main hero section. Iconography is clean and minimal, appearing as monochrome outlines or fills, consistent with the overall UI. When imagery is present, it serves an explanatory or informational role rather than a decorative or aspirational one, contained within clear sections or device mockups, and never bleeding into the background.

## Similar Brands

| Business | Why |
| --- | --- |
| Revolut | Dark UI with vibrant single accent color for financial tools. |
| Monzo | Focus on custom typography, clean interfaces, and bright accent colors within a fintech context. |
| Linear | Sophisticated dark theme, minimalist design with strong typographic hierarchy. |
| Cash App | Bold, custom typography and a strong brand color palette used aggressively for financial services. |
| Figma | Use of varied font weights and letter-spacing for UI elements creating a precise and modern feel. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (primary): #ffffff (Ghost White)
- Background (primary): #110e08 (Deep Space Black)
- CTA Button: #ccff00 (Rocket Lime)
- Text on CTA: #000000 (Void Black)
- Border/Subtle elements: #35322d (Shadow Graphite)

### 3-5 Example Component Prompts
1. Create a hero section with a Deep Space Black (#110e08) background. Headline: 'Todas tus inversiones realizadas desde una misma plataforma' using Martina Plantijn, 80px, weight 400, #ffffff, letter-spacing -0.0140em, centered. Subtext: 'Todo lo que necesitas para empezar a invertir está aquí.' using Capsule Sans Text, 16px, weight 400, #ffffff, letter-spacing -0.0080em, centered. Below the subtext, create a Primary Call-to-Action Button: 'Comienza' with Rocket Lime (#ccff00) background, Void Black (#000000) text (Capsule Sans Text, 16px, 400), 36px border-radius, 32px horizontal padding.

2. Design a feature card on a Rocket Lime (#ccff00) background. Headline: 'Invierte' using Capsule Sans Text, 31px, weight 400, #000000, letter-spacing -0.0190em. Body text: 'Empieza con Tokens de Acciones' using Phonic, 22px, weight 400, #000000, letter-spacing -0.0110em. Include a Secondary Ghost Button: 'Más información' with transparent background, Deep Space Black (#110e08) text (Capsule Sans Text, 16px, 400), 36px border-radius, 32px horizontal padding.

3. Generate a navigation bar. Background #110e08. Left-aligned brand logo (placeholder text 'Robinhood' in #ffffff). Right-aligned links: 'Lo que ofrecemos', 'Soporte', 'Acceder' (text in #ffffff, Capsule Sans Text, 16px, 400 without special padding/borders). Add a 'Regístrate' Primary Call-to-Action Button with Rocket Lime (#ccff00) background, Void Black (#000000) text (Capsule Sans Text, 16px, 400), 36px border-radius, 32px horizontal padding.

4. Create a mobile app screen mockup showing a 'Search' input field: Deep Space Black (#110e08) background, rounded with 36px border-radius, with a placeholder like 'Buscar por nombre o símbolo' in Shadow Graphite (#35322d).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924119623-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924119623-thumb.jpg |
