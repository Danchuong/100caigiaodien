# Reducto — Refero Style

- Refero URL: https://styles.refero.design/style/af55f85e-1c82-44c1-a8d0-32634bfa6296
- Site URL: https://reducto.ai
- ID: af55f85e-1c82-44c1-a8d0-32634bfa6296
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:25:22.041Z
- Ranks: newest: 805, popular: 733, trending: 569

> Crisp Data Canvas

## Description

Reducto embraces a clean, purposeful aesthetic, pairing high-contrast typography with a striking purple accent. The visual system features sharp edges and minimal elevation, emphasizing data clarity and directness. Monochrome interfaces are punctuated by a single vibrant brand color, creating focal points and guiding user interaction. Strong borders and subtle textural backgrounds provide structure without adding visual weight.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ghostly Gray | #fafaf9 | neutral | Page background, light surfaces, header background |
| Reducto Black | #292524 | neutral | Strongest body text, primary headings, navigation links |
| Subtle Ash | #79716b | neutral | Muted body text, secondary navigation, icon strokes |
| Medium Gray | #57534d | neutral | Body text in darker areas, bolder icon fills |
| Canvas White | #ffffff | neutral | Interactive elements, content card backgrounds, selected text |
| Reducto Purple Dark | #310632 | brand | Deepest purple for key informational text, emphasized content |
| Reducto Purple Accent | #9d17a0 | brand | Primary action backgrounds, critical headings, active navigation elements. This is the brand's primary interactive color |
| Reducto Purple Border | #690f6b | brand | Borders for primary action buttons, highlighting interactive elements |
| Whisper Lilac | #dcbffb | accent | Link color, hover states for text links, subtle accents |
| Sage Green | #718613 | accent | Green text accent for links, tags, and emphasized short phrases |
| Sunburst Orange | #a2541b | accent | Orange text accent for links, tags, and emphasized short phrases |
| Ocean Blue | #2482db | accent | Blue text accent for links, tags, and emphasized short phrases |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500 | 14px, 15px, 16px, 17px, 18px, 20px, 24px | 1.33, 1.43, 1.50, 1.56, 1.60 | Primary UI font for body text, navigation, and button labels. Optimized for clarity and consistency across digital interfaces. |
| reductoSerif | serif | 400, 470, 650 | 16px, 24px, 32px, 64px, 80px, 136px | 0.74, 1.13, 1.25, 1.33, 1.50 | Display font for 'hero' sections and impactful headlines. Its slight letter-spacing reduction gives it a more refined, precise appearance at large sizes. |
| reductosans | system-ui, sans-serif | 400, 500 | 14px, 15px, 16px | 1.43, 1.50, 1.60 | Secondary sans-serif for annotations, small utility text, and supporting information. It complements Inter by providing a slightly different texture at smaller scales. |
| Reddit Mono | monospace | 400 | 80px | 1.13 | Distinct monospace font used for numerical display, particularly large statistics or code-like elements where horizontal alignment is key. The tight letter-spacing emphasizes its structured nature. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.5 | 0 |
| body | 16 | 1.5 | 0 |
| subheading | 24 | 1.33 | -0.24 |
| heading | 32 | 1.25 | -0.32 |
| heading-lg | 64 | 1.13 | -0.64 |
| display | 136 | 0.74 | -1.36 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "24px",
  "sectionGap": "64px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Filled button for primary calls to action.

Background: #9d17a0. Text: #ffffff. Border: #690f6b (subtle darker shade of purple). Padding: 12px vertical, 16px horizontal. Corners: 0px (sharp).

### Ghost Action Button

**Role:** Outlined button for secondary or tertiary actions.

Background: transparent. Text: #310632. Padding: 5px vertical, 0px horizontal. Corners: 0px (sharp).

### Navigation Link Button

**Role:** Small, ghost-like button for navigation items.

Background: #ffffff. Text: #292524. Border: None. Padding: 5px vertical, 0px horizontal. Corners: 0px (sharp).

### Outline Secondary Button

**Role:** Outlined button variant for less prominent actions, found in content areas.

Background: #ffffff. Text: #57534d. Border: 1px solid #d7ccc1. Padding: 12px vertical, 24px horizontal. Corners: 0px (sharp).

### Hero Headline

**Role:** Large, impactful display text for hero sections.

Font: reductoSerif, Weight: 400. Size: 136px (for largest). Letter-spacing: -0.01em. Color: #292524, with accent words in #310632. Line Height: 0.74.

### Feature Card

**Role:** Container for individual feature descriptions within a grid.

Background: #fafaf9. Border: 1px solid #e7e5e4. No visible standard padding, content likely uses element gaps. Corners: 0px (sharp).

### Brand Notification Bar

**Role:** Top-banner for important announcements.

Background: #9d17a0. Text: #dcbffb. Font: Inter, Weight: 400. Size: 14px. Padding: 4px vertical, 8px horizontal. Line Height: 1.5.

## Do's

- Use Reducto Purple Accent (#9d17a0) sparingly and intentionally for primary interactive elements, such as buttons and active states, to create clear focal points.
- Maintain strict square edges (0px border-radius) for all interactive components and foundational elements like cards, adhering to the crisp aesthetic.
- Prioritize ReductoSerif for large, impactful headlines, leveraging its reduced letter-spacing (-0.01em) to convey a sense of precision.
- Structure layouts using strong visual borders like 1px solid #d7ccc1 or #e7e5e4 to define sections and separate content rather than relying on heavy shadows or background colors.
- Apply Reducto Black (#292524) for primary content text and headings, ensuring high contrast against light backgrounds.
- Utilize Inter for all functional UI text, ensuring readability and consistency across smaller text elements.
- Ensure all buttons use sharp 0px corners, reinforcing the precise and direct brand identity.

## Don'ts

- Avoid using multiple chromatic colors in close proximity; maintain a largely monochrome palette punctuated by the Reducto Purple Accent.
- Do not introduce rounded corners on primary components like buttons, cards, or input fields, as this conflicts with the sharp aesthetic.
- Refrain from heavy drop shadows or diffused elevation; rely on subtle inset shadows for interactive states or thin borders for separation.
- Do not use generic sans-serif fonts for main display text; always use reductoSerif for a distinct brand voice in headlines.
- Avoid large areas of saturated color that are not Reducto Purple Accent; color should serve a functional or highlight purpose.
- Do not clutter layouts with excessive elements; maintain comfortable density with explicit spacing tokens like 24px element gaps and 64px section gaps.
- Avoid using light text on light backgrounds or dark text on dark backgrounds without ensuring sufficient contrast (minimum AAA).

## Layout

The page adheres to a max-width, center-aligned containment model, with content breaking into a full-bleed purple announcement bar at the very top. The hero section features a centered headline over a light background, followed by sections that alternate between centered stacks of text and visual elements, and multi-column card grids. Vertical rhythm is maintained by consistent section gaps. Navigation is a persistent top bar with a distinct call-to-action button, while internal navigation within content blocks appears as simple text links. The overall density is comfortable, balancing whitespace with structured information blocks.

## Imagery

The visual language for imagery is primarily functional and illustrative. It features abstract, sparse dot-grid patterns and wireframe-style product renders, suggesting data structures and digital processes. These illustrations use simple lines and occasional brand-colored accents, never photographic. Icons are minimal, featuring thin strokes or solid fills, often monochrome with occasional use of spot accent colors (Sage Green, Sunburst Orange, Ocean Blue). Imagery serves to explain abstract concepts or showcase product functionality in a clean, technical context, often contained within defined sections rather than full-bleed.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Monochrome UI with a single vibrant accent color used for interactive elements. |
| Stripe | High-contrast typography, minimalist UI, and structured content blocks on a light canvas. |
| Vercel | Focus on precise typography, sharp edges, and a clean, technical aesthetic for sophisticated SaaS products. |
| Replit | Developer-focused design with emphasis on clean code-like typography and crisp UI elements. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #292524
background: #fafaf9
border: #d7ccc1
accent: #310632
primary action: #9d17a0 (filled action)

### 3-5 Example Component Prompts
1. Create a Primary Action Button: #9d17a0 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3. Create a feature card: Canvas White (#ffffff) background, 1px solid #e7e5e4 border, 0px radius. Inside, use a heading (Inter weight 500, 24px, Reducto Black #292524) and body text (Inter weight 400, 16px, Subtle Ash #79716b). Ensure a 24px card padding internally.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508693388-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508693388-thumb.jpg |
