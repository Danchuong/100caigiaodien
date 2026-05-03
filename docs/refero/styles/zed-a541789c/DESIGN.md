# Zed — Refero Style

- Refero URL: https://styles.refero.design/style/a541789c-36e7-45a4-9d1d-143921a82a8b
- Site URL: https://zed.dev
- ID: a541789c-36e7-45a4-9d1d-143921a82a8b
- Theme: light
- Industry: devtools
- Created: 2026-01-25T17:28:39.000Z
- Ranks: newest: 1274, popular: 62, trending: 37

> precision-engineered dark mode text editor

## Description

Zed's visual design evokes the quiet confidence of precision engineering, much like a well-crafted mechanical keyboard. A primary palette of cool blues and grays, accented by vibrant UI indicators, creates a focused, high-performance atmosphere. The interplay of crisp, small typography and generous negative space ensures clarity, allowing the powerful functionality of the editor to take center stage.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Blue | #1348dc | brand | Primary brand color for prominent headings, active links, and key interactive elements. Conveys a sense of depth and authority. |
| Sky Blue | #2b7fff | brand | Illustrative fill and stroke color, often seen in abstract graphics or larger UI elements. Provides a brighter contrast to Midnight Blue. |
| Deep Harbor | #464b57 | neutral | Dark primary text, button text on lighter backgrounds, and subtle borders. Forms the backbone of the typographic hierarchy. |
| Iceberg Blue | #8ec5ff | brand | Button states, secondary accents, and illustrative fills. Provides a lighter, more interactive shade of blue. |
| Pale Arctic | #bedbff | brand | Subtle borders and background tints for UI elements, offering a very light blue accent. |
| Cerulean Haze | #74ade8 | brand | Secondary text in body, icons, and less prominent interactive states. A mid-tone blue that supports the primary brand colors. |
| Carbon Gray | #5d636f | neutral | Subtle text, navigation items, and icon strokes. A darker gray for less prominent semantic information. |
| Pine Green | #a1c181 | semantic | Semantic positive indicators and specific body text highlights. Infrequent use provides impact. |
| Rosewood Red | #d07277 | semantic | Semantic warning or error indicators, and selected body text elements. Offers a warm contrast. |
| Golden Ochre | #dec184 | semantic | Amber accents for specific body text, icons, warning states, and occasional backgrounds. Reserved for highlights. |
| Page Background | #e5e7eb | neutral | Default page background. A very light, almost achromatic off-white providing a clean canvas. |
| Off-Black Text | #3a3d43 | neutral | Primary body text color throughout the site. Provides clear contrast against lighter backgrounds. |
| Medium Gray | #b2b5bb | neutral | Secondary text, subtle borders, and less prominent buttons. A mid-tone gray for supporting information. |
| Light Gray Border | #cccfd3 | neutral | Subtle borders, dividers, and background tints for UI elements. Creates clear separation without harsh lines. |
| White Surface | #ffffff | neutral | Card backgrounds, elevated UI surfaces, and some button fills. Provides maximum contrast and a clean modern feel. |
| Dark Editor Surface | #282c33 | neutral | Dark mode background for the embedded code editor. A very dark, almost black surface. |
| Input Background | #f4f4f2 | neutral | Subtle background for input fields, providing slight differentiation from the page background. |
| Dark Modal Background | #2f343 | neutral | Darker background for prominent interactive elements, like a modal or specific button states. |
| Accent Blue Shadow | #053794 | accent | Shadow color for subtle elevation, indicating interactive elements like navigation items. A darker, desaturated blue. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Writer | Inter | 400 | 10px, 11px, 12px, 13px, 14px, 16px | 1.10, 1.33, 1.43, 1.50, 1.71 | The primary font for body text, button labels, and general UI elements. Its relatively tight letter-spacing at all sizes enhances readability for dense code-editor-like content. |
| Zed Mono | IBM Plex Mono | 400 | 10px, 11px, 12px, 24px | 1.33, 1.50, 1.67, 2.00 | A monospaced font used for code blocks, input fields, and specific technical UI elements. Its wider letter-spacing provides clear distinction from the main body text, mimicking a terminal or editor environment. |
| Plex Serif | IBM Plex Serif | 340, 400 | 13px, 14px, 15px, 17px, 26px, 48px | 1.10, 1.20, 1.25, 1.43, 1.50 | Primarily used for page headings and subheadings. The delicate weight 340 for larger sizes provides an elegant, approachable feel contrasting with the functional monospaced and sans-serif fonts, softening the overall technical aesthetic. |
| ui-monospace | Menlo | 400, 700 | 11px, 12px | 1.00, 1.33, 1.43 | System monospaced font used for specific navigation or technical context where compact, crisp text is required. Its very tight letter-spacing prioritizes information density. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.1 | -0.25 |
| heading | 26 | 1.25 | -0.52 |
| display | 48 | 1.1 | -0.96 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "2px",
    "buttons": "2px",
    "default": "2px"
  },
  "elementGap": "",
  "sectionGap": "64px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Feature Cards



### Stat Block — Open Source Metrics



### Primary Navigation Link

**Role:** Interactive element in the main header.

Text in Writer font, weight 400, color Off-Black Text (#3a3d43). On hover, it shows a subtle bottom border or background change, occasionally with a box-shadow of rgb(5, 55, 148) 0px -2px 0px 0px inset, rgb(230, 239, 254) 0px 1px 3px 0px for active states.

### Secondary Ghost Button

**Role:** Subtle call to action or supplementary action.

Text color rgb(0, 0, 0), no background, no border, with 4px border-radius. Padding of 0px top/bottom, 8px right, 10px left. Very subtle, almost link-like.

### Brand Secondary Button (Light)

**Role:** Prominent but not primary action.

Background color oklab(0.999994 0.0000455677 0.0000200868 / 0.6) (essentially a very light, desaturated blue), text color oklch(0.359228 0.010478 262.86) (a deep indigo-gray). 4px border-radius, 10px padding all around. Has a subtle oklch(0.852786 0.00594737 262.86) (light indigo-gray) top border.

### Dark Code Block Button

**Role:** Interactive elements within the dark-themed code editor preview.

Background color rgb(46, 52, 62) (a dark slate), text color rgb(220, 224, 229) (a light gray). 2px border-radius, no padding defined, indicating tight internal spacing or inherited context. Has a rgb(70, 75, 87) border.

### Navigation Context Button (Dark Text)

**Role:** Navigation or contextual actions within a darker UI section.

No background, text color rgb(220, 224, 229) (light gray). No border or padding, often takes on the appearance of a focused textual element within an interactive zone with a oklch(0.928 0.006 264.531) (pale indigo-gray) border.

### Code Input Field

**Role:** Used for user input in code-related contexts.

Transparent background, text color rgb(220, 224, 229) (light gray), no border. 0px border-radius, and 4px padding on all sides. Uses Zed Mono font for input.

### Feature Card

**Role:** Showcasing individual product features.

Card background is White Surface (#ffffff), with text in Off-Black Text (#3a3d43). Padding of 16px to 24px and a 2px border-radius. Features a subtle inset shadow rgba(111, 123, 144, 0.05) 0px -2px 0px 0px for visual depth. The content within has tight spacing, typically 6px row gap.

### Code Editor Frame

**Role:** Visual container for the embedded code editor preview.

Background color Dark Editor Surface (#282c33). Features box-shadow rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px for a distinct elevated appearance. Interior content uses Zed Mono typography.

## Do's

- Use Midnight Blue (#1348dc) for all primary calls to action, prominent links, and main interactive button states.
- Employ the 2px border-radius consistently across all interactive elements, cards, and image containers, giving a subtle but unified crispness.
- Maintain a clear visual hierarchy by utilizing Plex Serif weight 340 for major headings and Writer weight 400 for all body text.
- Apply specific letter-spacing: -0.0250em for Writer font to optimize readability for dense UI, and 0.0500em for Zed Mono to distinguish code/technical text.
- Use Page Background (#e5e7eb) as the canvas for most content sections, ensuring a clean and bright base.
- Incorporate subtle inset box-shadows (e.g., rgba(111, 123, 144, 0.1) 0px -2px 0px 0px inset) on interactive elements or cards to create depth without heavy drop shadows.
- Limit the use of saturated colors like Pine Green (#a1c181), Rosewood Red (#d07277), and Golden Ochre (#dec184) to semantic indicators or specific highlights to maximize their impact.

## Don'ts

- Do not introduce strong drop shadows; rely on the subtle inset shadows or lighter elevated box-shadows.
- Avoid large, ornate typography. The design prioritizes small, precise text with generous line heights over oversized headlines.
- Do not use generic system fonts where custom fonts Writer, Zed Mono, or Plex Serif are specified, as their unique letter-spacing and weights are crucial to the brand identity.
- Refrain from using heavily saturated background colors for content sections; stick to the neutral scale and slight blue tints.
- Do not apply rounded corners greater than 2px to general UI elements, as this contradicts the overall crisp, engineered aesthetic.
- Avoid cluttering layouts with excessive elements; maintain generous elementGap (6px, 10px, 12px) and sectionGap (64px) for clear information separation.
- Do not use more than two saturated brand colors prominently in any single view, to keep the focus on clarity and code editor aesthetic.

## Layout

The page primarily uses a max-width contained layout, approximately 1200px, centered on a light Page Background (#e5e7eb). The hero section is centered with a prominent headline and call-to-action buttons. Content sections often alternate between wide, full-width blocks and narrower, centered content divisions. There's a consistent vertical rhythm, with sections separated by significant sectionGap (64px). Text-heavy sections frequently use a 2-column layout or a single centered column. Feature descriptions often employ a 3-column grid for overview. Embedded code editor previews are typically wide, visually striking blocks. The navigation is a sticky top bar with clearly defined interactive elements.

## Imagery

The site's visual language is a blend of product screenshots, user avatars, and abstract, geometric line-art illustrations. Product screenshots are typically high-fidelity captures of the Zed editor in a dark mode theme, shown in context or isolated as compelling visuals. They are often full-bleed or centrally placed, occupying significant visual real estate to showcase the UI. User avatars are small, circular, and appear in grids to convey community and social proof. Abstract illustrations are sparse, utilize thin linework, and soft blue fills (e.g., Sky Blue #2b7fff), serving a decorative atmospheric role without distracting from the UI. There's a notable absence of lifestyle photography. The overall density is balanced, with imagery serving as key focal points amidst text-heavy sections, acting as explanatory content and product showcase.

## Similar Brands

| Business | Why |
| --- | --- |
| VS Code | Developer tool with a focus on clean, functional UI, high contrast, and dark mode for code display, using minimal visual flourishes. |
| Linear | SaaS product for developers/teams featuring a minimalist design, strong typography, and a refined use of small radius and subtle shadows on interactive elements. |
| Superhuman | Productivity application with a clean, high-performance aesthetic, prioritizing information density and crisp typography with limited color accents. |
| Vercel | DevOps platform with a strong emphasis on dark mode UI, precise spacing, and subtle blue/gray color palettes for technical content presentation. |
| Raycast | Utility tool with an emphasis on speed and efficiency reflected in its UI, featuring a dark/light mode toggle with simple typography and minimal visual clutter, focusing on functional aesthetics. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Text (Primary):** #3a3d43
- **Background (Page):** #e5e7eb
- **CTA (Primary):** #1348dc
- **Border (Neutral):** #b2b5bb
- **Accent (Semantic Red):** #d07277

### 3-5 Example Component Prompts
1. **Create a hero section:** Background is Page Background (#e5e7eb). Centered headline 'Love your editor again' in Plex Serif, weight 340, size 48px, color Midnight Blue (#1348dc), letterSpacing -0.96px. Subtext 'Zed is a minimal code editor crafted for speed and collaboration with humans and AI.' in Writer, weight 400, size 16px, color Off-Black Text (#3a3d43), lineHeight 1.5.
2. **Generate a primary button for download:** Background Midnight Blue (#1348dc), text 'Download now D' in Writer, weight 400, size 14px, color White Surface (#ffffff), with 4px border-radius, padding 10px 16px (top/bottom/left/right by inference).
3. **Design a feature card:** Background White Surface (#ffffff), padding 16px all around, 2px border-radius. Apply subtle inset shadow rgba(111, 123, 144, 0.05) 0px -2px 0px 0px. Headline in Plex Serif, weight 400, size 26px, color Off-Black Text (#3a3d43), letterSpacing -0.52px. Body text in Writer, weight 400, size 14px, color Carbon Gray (#5d636f).
4. **Create an embedded code editor preview section:** Background Dark Editor Surface (#282c33), with box-shadow rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px. Content uses Zed Mono, weight 400, size 12px, color rgb(220, 224, 229).
5. **Build a navigation link:** Text 'Product' in Writer, weight 400, size 16px, color Off-Black Text (#3a3d43). On hover, display a subtle bottom border of Midnight Blue (#1348dc) 2px solid.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923018209-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923018209-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a541789c-36e7-45a4-9d1d-143921a82a8b-1777568348453-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a541789c-36e7-45a4-9d1d-143921a82a8b-1777568348453-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a541789c-36e7-45a4-9d1d-143921a82a8b-1777568348453-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a541789c-36e7-45a4-9d1d-143921a82a8b-1777568348453-preview-detail-poster.jpg |
