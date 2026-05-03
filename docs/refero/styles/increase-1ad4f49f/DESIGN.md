# Increase — Refero Style

- Refero URL: https://styles.refero.design/style/1ad4f49f-275a-4268-8ed1-677dc3c6e475
- Site URL: https://increase.com
- ID: 1ad4f49f-275a-4268-8ed1-677dc3c6e475
- Theme: light
- Industry: fintech
- Created: 2026-04-30T01:34:21.920Z
- Ranks: newest: 571, popular: 1304, trending: 1309

> Angular neon blueprint

## Description

Increase employs a 'dark mode on light canvas' aesthetic, contrasting a clean, spacious white background with a deeply saturated, almost black primary UI color. Angular, vivid gradients provide dynamic accents, creating an energetic feel for a brand focused on API infrastructure. Typography is engineered for technical clarity, utilizing a custom monospace font for code snippets and a precise sans-serif for all other text. Components are sharp and functional, embracing subtle shadows for depth over heavy borders, emphasizing a modern and highly interactive user experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #1a2b3b | brand | Primary UI text, interactive elements (buttons, links), card backgrounds in dark sections |
| Storm Gray | #314352 | neutral | Secondary text, subtle borders, and descriptive content |
| Oceanic Deep | #0d1726 | brand | Dark card backgrounds, prominent content blocks in dark sections |
| Stone Whisper | #8995a1 | neutral | Muted helper text, placeholder text, disabled states |
| Smoke Light | #687887 | neutral | Inactive navigation items, subtle button borders for ghost actions, tertiary text |
| Electric Lime | #e4ff33 | accent | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content; Dynamic background accents, callout sections with energetic visuals |
| Aqua Glow | #31f2bf | accent | Green outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color; Highlighting API code examples, energetic visual elements; Subtle background accents, connecting elements in a flow |
| Cloud Canvas | #edf0f2 | neutral | Page backgrounds, large container surfaces, subtle form field backgrounds |
| Ink Black | #000000 | neutral | High contrast text, decorative elements, code snippets |
| Polar White | #ffffff | neutral | Default backgrounds for cards and text, active state text for dark buttons |
| Ash Grey | #caced2 | neutral | Hairline borders, dividers, subtle card shadows |
| Pale Stone | #e1e5e9 | neutral | Subtle card backgrounds, distinct yet light surface transitions |
| Sky Surge Gradient | #02b7f1 | accent | Prominent hero section backgrounds, defining visual anchors |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Untitled Sans | system-ui, sans-serif | 400, 500, 700 | 14px, 16px, 20px, 24px, 32px, 40px, 90px | 1.00, 1.10, 1.13, 1.17, 1.40, 1.43, 1.50 | Primary brand typeface for all headings, body text, and UI labels. The tighter letter spacing across various sizes creates a compact, modern feel. |
| Input Mono | SFMono-Regular, Consolas, Liberation Mono, Menlo, monospace | 400 | 10px, 13px, 14px, 20px | 1.43, 1.50, 1.54, 1.60 | Monospaced font for code examples and technical data displays. The specific stylistic sets ('ss01', 'ss02', 'ss12') enhance legibility and distinguish it from generic monospace fonts. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.43 | -0.14 |
| body | 16 | 1.5 | -0.16 |
| subheading | 20 | 1.4 | -0.2 |
| heading-sm | 24 | 1.4 | -0.24 |
| heading | 32 | 1.17 | -0.32 |
| heading-lg | 40 | 1.13 | -0.4 |
| display | 90 | 1 | -0.9 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "4px",
    "cards": "12px",
    "pills": "999px",
    "buttons": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call-to-action button for sign-ups and key actions.

Solid Midnight Ink (#1a2b3b) background with Polar White (#ffffff) text. Features 8px border-radius and 5px vertical, 10px horizontal padding.

### Ghost Sales Button

**Role:** Secondary call-to-action for sales inquiries, subtly presented.

Transparent background with Smoke Light (#687887) text and a matching 1px border. Flexible padding with no explicit border radius (0px, likely text link style).

### Secondary Outlined Button

**Role:** Alternative action button, visually distinct but less prominent than primary.

Polar White (#ffffff) background, Midnight Ink (#1a2b3b) text, with a Pale Stone (#edf0f2) 1px border. Rounded corners at 8px, with 10px vertical and 15px horizontal padding.

### Icon Link Button

**Role:** Text link style button, used for navigation or supplementary actions.

Transparent background with Smoke Light (#687887) text and a matching 1px border. Small 5px vertical and 10px horizontal padding, with 8px border-radius. Visually similar to ghost but with more padding.

### Hero Code Card

**Role:** Displays technical code examples against a dark background.

Oceanic Deep (#0d1726) background with a large shadow: rgba(12, 25, 39, 0.05) 0px 6px 8px, rgba(12, 25, 39, 0.06) 0px 16px 20px, rgba(12, 25, 39, 0.1) 0px 50px 60px. No internal padding, uses 12px border-radius.

### Feature Grid Card

**Role:** Showcases individual features or service offerings in a clean, distinct block.

Polar White (#ffffff) background, subtle shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px. Padding of 12px on all sides and a 12px border-radius.

### API Service Card

**Role:** Displays specific API services, with a light background and subtle borders.

Pale Stone (#e1e5e9) background, no padding, 12px border-radius, and a prominent shadow: rgba(12, 25, 39, 0.05) 0px 6px 8px, rgba(12, 25, 39, 0.06) 0px 16px 20px, rgba(12, 25, 39, 0.1) 0px 50px 60px.

### Input Preview Card

**Role:** Interactive mockups or examples of input fields, often within a product display.

Oceanic Deep (#0d1726) background, no padding, 12px border-radius, and a subtle shadow: rgba(12, 25, 39, 0.03) 0px 6px 8px, rgba(12, 25, 39, 0.09) 0px 18px 22px.

## Do's

- Prioritize Midnight Ink (#1a2b3b) for primary headings and key interactive elements, ensuring strong contrast against light backgrounds.
- Use Cloud Canvas (#edf0f2) as the default page background to establish a consistent light theme foundation.
- Apply Aqua Glow (#31f2bf) and Electric Lime (#e4ff33) sparingly for functional highlights, iconography, and code syntax, bringing bursts of energy.
- Maintain a clear visual hierarchy with Untitled Sans, using larger sizes (90px, 40px) with tighter letter spacing (-0.9px, -0.4px) for display text and smaller sizes for body and UI elements (16px, 14px) with less aggressive tracking.
- Utilize Input Mono for all code blocks and technical snippets, applying font-feature-settings 'ss01', 'ss02', 'ss12' for consistent code readability.
- Implement 12px border-radius for all cards and containers, and 8px for buttons and form elements, for a cohesive friendly curvature.
- Employ the subtle shadow rgba(0, 0, 0, 0.1) 0px 1px 3px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px for elevated components like Feature Grid Cards to provide gentle depth.

## Don'ts

- Do not introduce new saturated primary colors; adhere strictly to Electric Lime (#e4ff33) and Aqua Glow (#31f2bf) for accentuation.
- Avoid using generic system fonts; always specify 'Untitled Sans' or 'Input Mono' to maintain brand consistency.
- Do not deviate from the established letter-spacing values for type roles; the precise tracking is a core element of the typographic identity.
- Refrain from using heavy, opaque shadows; always opt for the provided soft, diffused shadow styles to prevent visual clutter and maintain lightness.
- Avoid arbitrary padding or margin values; stick to multiples of the 4px base unit, with a default element gap of 8px.
- Never apply gradients to text or small UI elements; reserve them for large decorative backgrounds or brand illustrations.
- Do not introduce additional border patterns beyond 1px solid, as surface treatment relies on subtle shadows and distinct background colors.

## Layout

The page primarily uses a max-width contained layout, though the hero section is full-bleed with dynamic angular gradients that extend edge-to-edge. The hero features a large, centered headline over a dark background with an action button set. Sections below alternate between white and gray backgrounds, creating a clear vertical rhythm. Content often arranges in two-column layouts with text on one side and a visual (product screenshot or code example) on the other, or a three-column card grid for features. Vertical spacing between sections is generous, contributing to a comfortable, uncrowded feel. A sticky top navigation bar provides consistent access to primary links and sign-in/sign-up buttons.

## Imagery

The site uses a combination of abstract, angular gradients and focused product screenshots. Photography is absent. Illustrations are abstract, geometric, and vibrant, using the brand's key accent colors (Aqua Glow, Electric Lime) and blues. Icons are primarily outlined or filled with solid colors, appearing with medium stroke weight (likely 1.5-2px visually) in either accent colors or Midnight Ink. The imagery serves both decorative atmospheric purposes (gradients) and explanatory content (product screenshots, code examples with syntax highlighting). The density is balanced, with imagery carefully integrated to support text rather than overwhelm it.

## Elevation

| Element | Style |
| --- | --- |
| Feature Grid Card | rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px |
| API Service Card / Hero Code Card | rgba(12, 25, 39, 0.05) 0px 6px 8px 0px, rgba(12, 25, 39, 0.06) 0px 16px 20px 0px, rgba(12, 25, 39, 0.1) 0px 50px 60px 0px |
| Input Preview Card | rgba(12, 25, 39, 0.03) 0px 6px 8px 0px, rgba(12, 25, 39, 0.09) 0px 18px 22px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a clean, API-first aesthetic with a strong sans-serif typeface, dark UI elements on a mostly white background, and controlled use of gradient accents to highlight key areas. |
| Linear | Similar approach to dark-on-light theming, precise typography with custom fonts, and a focus on functional visual clarity rather than decorative fluff, especially in component design. |
| Vercel | Employs an engineering-focused visual style with clear hierarchy, sophisticated code block presentation, and an often monochromatic palette punctuated by distinct accent colors for interactive elements. |
| Retool | Utilizes a highly structured component-based design, prioritizing information density and technical clarity with a precise typeface and minimal ornamentation, similar to Increase's approach to financial APIs. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1a2b3b
background: #edf0f2
border: #caced2
accent: #e4ff33
primary action: #1a2b3b (filled action)

Example Component Prompts:
1. Create a Primary Filled Button: midnight ink background (#1a2b3b), polar white text (#ffffff), 8px radius, untitled sans weight 500 at 16px, 5px vertical padding, 10px horizontal padding.
2. Create a Feature Grid Card: polar white background (#ffffff), 12px radius, shadow rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px, 12px padding, untitled sans weight 500 at 20px for title in midnight ink (#1a2b3b).
3. Create a Hero Code Card: oceanic deep background (#0d1726), 12px radius, shadow rgba(12, 25, 39, 0.05) 0px 6px 8px, rgba(12, 25, 39, 0.06) 0px 16px 20px, rgba(12, 25, 39, 0.1) 0px 50px 60px; for code, use input mono weight 400 at 14px with aqua glow (#31f2bf) for keywords, and polar white (#ffffff) for general text, with 'ss01', 'ss02', 'ss12' font features.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512812400-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512812400-thumb.jpg |
