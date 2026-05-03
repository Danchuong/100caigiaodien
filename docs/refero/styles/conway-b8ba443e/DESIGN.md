# Conway — Refero Style

- Refero URL: https://styles.refero.design/style/b8ba443e-5d83-4f37-b8c6-a1acd7623d0c
- Site URL: https://conway.ai
- ID: b8ba443e-5d83-4f37-b8c6-a1acd7623d0c
- Theme: dark
- Industry: saas
- Created: 2026-02-24T18:44:24.000Z
- Ranks: newest: 1135, popular: 212, trending: 200

> Shadowless Dark Operations Grid. The visual style is a dark, grid-based interface, where information is displayed with stark clarity against a deep, textured background.

## Description

This design system evokes a clandestine operations center, precise and controlled. Its strength is in the relentless darkness of its background, which provides a stark, high-contrast canvas for sparse, focused information. The near-achromatic type, primarily in off-white, and a single vibrant orange accent, guide the eye with surgical precision. The absence of traditional shadows, replaced by subtle changes in background lightness and bordering, helps maintain the crisp, flat, and technically-oriented aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Grid | #000000 | neutral | Deepest background on some surfaces and backgrounds for icon fills. |
| Slate Night | #0e0c0c | neutral | Primary text color for headlines and body text, button text on dark buttons, and general content. The slightly off-black hue maintains softness in darkness. |
| Faded Ash | #aeafb0 | neutral | Background color for text fields, offering a slight visual distinction from the darker surface underneath. |
| Ghost White | #fafaf9 | neutral | Dominant text color for titles, body, and button text against dark backgrounds. Also used as a white background for interactive elements in the header, suggesting a neutral canvas for user interaction. |
| Subtle Gray | #e5e7eb | neutral | Used for borders around cards, buttons, and input fields, providing structure and separation without visual heaviness. Its lightness against dark fields suggests definition rather than division. |
| Blaze Orange | #f6511d | accent | Focal accent color for calls to action, interactive text, and indicating active states or critical information. Its vividness against dark neutral tones serves as a precise indicator, not a decorative flourish. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ABC Monument Grotesk Unlicensed Trial | Inter | 300 | 10px, 11px, 12px, 13px, 14px, 16px, 17px, 19px, 20px, 26px, 30px, 40px, 42px | 1.00, 1.10, 1.20, 1.40, 1.50, 1.60, 1.63 | Primary typeface for all headings, body text, navigation items, buttons, and most UI elements. Its clean, geometric form maintains the technical and precise aesthetic across all sizes and weights. Notably, the subtle negative letter spacing at larger sizes tightens headlines for a more contained feel. |
| ui-monospace | JetBrains Mono | 400 | 10px | 1.50 | Used for specific functional elements like small labels or code snippets. Its monospace nature provides clear, fixed-width content, suitable for technical details where precise alignment is paramount. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.5 |
| body | 14 | 1.6 |  |
| heading | 20 | 1.5 |  |
| heading-lg | 30 | 1.2 | -0.6 |
| display | 42 | 1.1 | -1.47 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "images": "9999px",
    "inputs": "0px",
    "buttons": "0px"
  },
  "elementGap": "4px",
  "sectionGap": "",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Blog Feature Card



### Fraud Lifecycle Stage List



### Careers Job Listings Card



### Primary Header Button (Light)

**Role:** Call to action button for primary actions in the header.

Background: #fafaf9 (Ghost White), Text: #0e0c0c (Slate Night), Border: #e5e7eb (Subtle Gray), Radius: 3px, Padding: 7px 14px.

### Navigation Link Button (Dark)

**Role:** Secondary action or informational link in the navigation.

Background: rgba(12, 12, 12, 0.85), Text: #fafaf9 (Ghost White), Border: rgba(255, 255, 255, 0.15) on top, Radius: 0px, Padding: 0px 12px.

### Informational Card Button (Dark Contrast)

**Role:** Actionable item within darker card containers, providing clear call to action within specific content blocks.

Background: rgba(0, 0, 0, 0.3), Text: #0e0c0c (Slate Night), Border: rgba(250, 250, 249, 0.15) on top, Radius: 0px, Padding: 10px 14px. This button's text appears dark against a dark background, suggesting it's intended for a 'hover' or 'focus' state where the text becomes visible, or indicates a disabled state.

### Orange Action Link (Inline)

**Role:** Inline text link for secondary actions or specific navigation points.

Background: transparent, Text: #f6511d (Blaze Orange), Border: transparent, Radius: 0px, Padding: 0px. Used for 'Read More' or 'View Careers' links.

### Text Input Field

**Role:** Standard input field for user data entry.

Background: rgba(0, 0, 0, 0.3) (dark transparent), Text: #fafaf9 (Ghost White), Border: rgba(250, 250, 249, 0.15) on top, Radius: 0px, Padding: 10px 12px. The almost-black background integrates seamlessly into the dark theme, while the light border provides subtle definition.

### Job Listing Link

**Role:** Interactive list item for job postings, indicating a click target.

Background: transparent, Text: #e5e7eb (Subtle Gray), padding: 10px vertically. Text weight 400 at 16px. Designed to blend into the surrounding content while remaining clickable.

### Navigation Link

**Role:** Main navigation item in the footer.

Text: #fafaf9 (Ghost White) at 14px, weight 400. Letter spacing normal. No background, transparent. These links are simple text, relying on color contrast for visibility in the footer against the dark background.

### Feature Card

**Role:** Container for distinct content blocks, often with a title and description.

Background: transparent (inherit from page background), Border: #e5e7eb (Subtle Gray) on specific sides for structure, no radius, padding varies.

## Do's

- Use ABC Monument Grotesk Unlicensed Trial for all text and UI elements, prioritizing weights 300-500. Substitute with Inter if custom font is unavailable.
- Maintain a predominantly dark theme with #000000 (Midnight Grid) and #0e0c0c (Slate Night) as primary background and text colors respectively.
- Apply #f6511d (Blaze Orange) strictly as the accent color for interactive states, key calls to action, and critical indicators, and avoid mixing it with other chromatic colors.
- Enforce 0px border-radius for all primary UI elements like buttons, cards, and input fields to maintain a sharp, technical aesthetic.
- Structure content using subtle borders like rgba(250, 250, 249, 0.15) and #e5e7eb, rather than drop shadows, for visual separation.
- Utilize letter-spacing of -0.0350em for large display text (e.g., 42px) to create a denser, more integrated headline appearance.
- Use `ui-monospace` for small, technical text at 10px with `0.0500em` letter-spacing for specific data or label displays.

## Don'ts

- Do not introduce drop shadows for elevation; use background color changes or subtle borders instead.
- Avoid using a vibrant color palette beyond #f6511d (Blaze Orange) to maintain the focused and precise visual identity.
- Do not use rounded corners larger than 3px; prefer 0px or small radii for specific components like the header button.
- Do not center-align body text; maintain left-alignment for readability in extended content blocks.
- Avoid using bright, saturated background colors; stick to the dark neutral palette.
- Do not deviate from the established typography for headlines and body text; maintain the strict hierarchy and letter spacing.
- Do not apply padding less than 7px for interactive elements; ensure sufficient touch/click targets.

## Layout

The page primarily uses a full-bleed dark background, but content within sections is constrained within an implicit maximum width, giving a contained feel without hard borders. The hero establishes a split layout with a prominent headline on the left and a complementary visual/text block on the right. Subsequent sections often follow a similar side-by-side or stacked content arrangement. Vertical spacing between main sections (sectionGap) is significant, creating distinct content blocks. The layout emphasizes clear, structured information flow, often in two-column formats, with ample negative space to allow content to breathe against the dark backdrop. The footer presents a compact, multi-column link structure.

## Imagery

The site primarily uses product screenshots and abstract, technically-oriented graphics. Product screenshots are contained within dark UI frames, showing internal UIs with data visualizations, often featuring a black background with subtle colored progress bars and text. Imagery is functional and illustrative of complex processes rather than decorative. Graphics are generally abstract, featuring subtle grid patterns or interconnected nodes, often in shades of gray or dark blue, used as background textures. The only curved element identified is the 9999px radius on small avatars/logos within some sections, contrasting against the predominantly sharp edges.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Dark-mode UI, sharp edges, high-contrast typography, and a focus on density and functionality over decorative elements. |
| Vercel | Dark theme with subtle grid backgrounds, emphasis on developer tools, clean typography, and strategic use of a single accent color. |
| Stripe (dark mode) | High-contrast text on dark backgrounds, strong emphasis on type hierarchy, and a professional, tech-forward aesthetic without heavy ornamentation. |
| DeepMind | Dark, structured interfaces for showcasing complex data and technical concepts, often with minimal color accents. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Primary): #0e0c0c
- Text (Light): #fafaf9
- Background (Deepest): #000000
- Accent: #f6511d
- Border (Subtle): #e5e7eb

### 3-5 Example Component Prompts
1. Create a primary header button: background #fafaf9, text #0e0c0c, border #e5e7eb, radius 3px, padding 7px 14px, font ABC Monument Grotesk 400 at 14px.
2. Design an input field: background rgba(0, 0, 0, 0.3), text #fafaf9, top border rgba(250, 250, 249, 0.15), radius 0px, padding 10px 12px, placeholder text #aeafb0, font ABC Monument Grotesk 300 at 14px.
3. Create a hero headline: text 'Prevent Fraud with Conway', font ABC Monument Grotesk 42px weight 300, #fafaf9, letter-spacing -1.47px.
4. Generate an inline orange accent link: text 'Learn More', font ABC Monument Grotesk 14px weight 400, #f6511d, no letter-spacing adjustment, no background.
5. Build a job listing item: text 'Software Engineer Full-Time · San Francisco', font ABC Monument Grotesk 16px weight 400, #e5e7eb, background transparent, 10px vertical padding, right-aligned arrow icon.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925942211-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925942211-thumb.jpg |
